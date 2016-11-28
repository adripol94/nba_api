<?php

namespace Model;
/**
 * Created by PhpStorm.
 * User: adripol94
 * Date: 11/28/16
 * Time: 10:07 PM
 */
class Team
{
    private $is_nba_team;
    private $team_name;
    private $team_nickname;
    private $team_code;
    private $team_abbrev;
    private $city;
    private $state;
    private $team_short_name;
    private $team_id;
    private $conference;
    private $division_id;

    /**
     * Team constructor.
     */
    public function __construct()
    {


    }


    /**
     * @return mixed
     */
    public function getIsNbaTeam()
    {
        return $this->is_nba_team;
    }

    /**
     * @param mixed $is_nba_team
     */
    public function setIsNbaTeam($is_nba_team)
    {
        $this->is_nba_team = $is_nba_team;
    }

    /**
     * @return mixed
     */
    public function getTeamName()
    {
        return $this->team_name;
    }

    /**
     * @param mixed $team_name
     */
    public function setTeamName($team_name)
    {
        $this->team_name = $team_name;
    }

    /**
     * @return mixed
     */
    public function getTeamNickname()
    {
        return $this->team_nickname;
    }

    /**
     * @param mixed $team_nickname
     */
    public function setTeamNickname($team_nickname)
    {
        $this->team_nickname = $team_nickname;
    }

    /**
     * @return mixed
     */
    public function getTeamCode()
    {
        return $this->team_code;
    }

    /**
     * @param mixed $team_code
     */
    public function setTeamCode($team_code)
    {
        $this->team_code = $team_code;
    }

    /**
     * @return mixed
     */
    public function getTeamAbbrev()
    {
        return $this->team_abbrev;
    }

    /**
     * @param mixed $team_abbrev
     */
    public function setTeamAbbrev($team_abbrev)
    {
        $this->team_abbrev = $team_abbrev;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getTeamShortName()
    {
        return $this->team_short_name;
    }

    /**
     * @param mixed $team_short_name
     */
    public function setTeamShortName($team_short_name)
    {
        $this->team_short_name = $team_short_name;
    }

    /**
     * @return mixed
     */
    public function getTeamId()
    {
        return $this->team_id;
    }

    /**
     * @param mixed $team_id
     */
    public function setTeamId($team_id)
    {
        $this->team_id = $team_id;
    }

    /**
     * @return mixed
     */
    public function getConference()
    {
        return $this->conference;
    }

    /**
     * @param mixed $conference
     */
    public function setConference($conference)
    {
        $this->conference = $conference;
    }

    /**
     * @return mixed
     */
    public function getDivisionId()
    {
        return $this->division_id;
    }

    /**
     * @param mixed $division_id
     */
    public function setDivisionId($division_id)
    {
        $this->division_id = $division_id;
    }



}