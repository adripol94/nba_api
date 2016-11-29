<?php

/**
 * Created by PhpStorm.
 * User: adripol94
 * Date: 11/28/16
 * Time: 6:32 PM
 */

use Model\BDConnection;
use Model\JSONReader;

require_once "BDConnection.php";
require_once "JSONReader.php";

echo "Loadging...<br/>";

$array = array();
$json = new JSONReader();
$array = $json->getArray();

$db  = \BDConnection::getInstance();
$db_connection = $db->getConnection();


$query = "INSERT INTO Equipos(is_nba_team, team_name, team_nickname, team_code, team_abbrev, city, state, team_short_name, conference, division_id) VALUES (?,?,?,?,?,?,?,?,?,?)";

$prep_query = $db_connection->prepare($query);
echo "Subiendo archivos...<br/>";
$prep_query->bind_param('isssssssss', $nbaTeam, $teanName, $teamNick, $teamCode, $teamAbbrev,
    $city, $state, $teamShort, $conference, $division);
foreach ($array as $item) {
    $nbaTeam = $item->getIsNbaTeam();
    $teanName = $item->getTeamName();
    $teamNick = $item->getTeamNickname();
    $teamCode = $item->getTeamCode();
    $teamAbbrev = $item->getTeamAbbrev();
    $city = $item->getCity();
    $state = $item->getState();
    $teamShort = $item->getTeamShortName();
    $conference = $item->getConference();
    $division = $item->getDivisionId();
    $prep_query->execute();
}

$prep_query->close();
$db_connection->close();