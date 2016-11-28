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

echo "Loadging...";

$array = array();
$json = new JSONReader();
$array = $json->getArray();

$db  = \BDConnection::getInstance();
$db_connection = $db->getConnection();


$query = "INSERT INTO `Equipos`(`is_nba_team`, `team_name`, `team_nickname`, `team_code`, `team_abbrev`, `city`, `state`, `team_short_name`, `team_id`, `conference`, `division_id`) VALUES 
(?,?,?,?,?,?,?,?, ?, ?, ?)";

$prep_query = $db_connection->prepare($query);

foreach ($array as $item) {
    $prep_query->bind_param(i, $item->getIsNbaTeam());
}