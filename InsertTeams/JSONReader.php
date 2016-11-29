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
                $e->setIsNbaTeam($item["is_nba_team"]);
                $e->setTeamName($item["team_name"]);
                $e->setTeamNickname($item["team_nickname"]);
                $e->setTeamCode($item["team_code"]);
                $e->setTeamAbbrev($item["team_abbrev"]);
                $e->setCity($item["city"]);
                $e->setState($item["state"]);
                $e->setTeamShortName($item["team_short_name"]);
                $e->setTeamId($item["team_id"]);
                $e->setConference($item["conference"]);
                $e->setDivisionId($item["division_id"]);
                $equiposArray[$i] = $e;
                $e = new Team();
                $i++;
            }
        }
        return $equiposArray;
    }
}