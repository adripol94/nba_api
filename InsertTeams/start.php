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


$query = "INSERT INTO Equipos(active, team_name, first_name, last_name, abbreviation, city, state, conference, division) VALUES (?,?,?,?,?,?,?,?,?)";

$prep_query = $db_connection->prepare($query);
echo "Subiendo archivos...<br/>";
$prep_query->bind_param('issssssss', $active, $teanName, $team_name, $first_name, $last_name,
    $abbreviation, $city, $state, $conference, $division);
foreach ($array as $item) {
     $active = $item->getActive();
    $teanName = $item->getTeamName();
    $last_name = $item->getLastName();
    $abbreviation = $item->getAbbreviation();
    $city = $item->getCity();
    $state = $item->getState();
    $conference = $item->getConference();
    $division = $item->getDivision();
    $prep_query->execute();
}

$prep_query->close();
$db_connection->close();