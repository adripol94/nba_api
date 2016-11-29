<?php
/**
 * Created by PhpStorm.
 * User: adripol94
 * Date: 11/28/16
 * Time: 11:07 PM
 */

namespace Model;

require_once "Team.php";

class JSONReader
{
    public function getArray()
    {
        $equiposArray = array();
        $e = new Team();
        $str = file_get_contents('http://data.nba.com/data/');
        $json = json_decode($str, true);
        $i = 0;

        if (is_array($json)) {

            $teams = $json["sports_content"];
            $team = $teams["teams"];

            foreach ($team["team"] as $item) {
                $e->setActive($item["active"]);
                $e->setAbbreviation($item["abbreviation"]);
                $e->setFirstName($item["first_name"]);
                $e->setConference($item["conference"]);
                $e->setDivision($item["division"]);
                $e->setCity($item["city"]);
                $e->setState($item["state"]);
                $e->setTeamName($item["full_name"]);
                $e->setLastName($item["last_name"]);
                $equiposArray[$i] = $e;
                $e = new Team();
                $i++;
            }
        }
        return $equiposArray;
    }
}