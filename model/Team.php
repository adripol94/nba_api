<?php

/**
 * Created by PhpStorm.
 * User: apol
 * Date: 24/11/16
 * Time: 9:37
 */
class Team implements JsonSerializable
{
    private $team_id;
    private $team_name;
    private $first_name;
    private $last_name;
    private $active;
    private $city;
    private $abbreviation;
    private $state;
    private $division;
    private $conference;

    /**
     * Team constructor.
     * @param $team_id
     * @param $team_name
     * @param $first_name
     * @param $last_name
     * @param $active
     * @param $city
     * @param $abbreviation
     * @param $state
     * @param $division
     * @param $conference
     */
    public function __construct($team_id, $team_name, $first_name, $last_name, $active, $city, $abbreviation, $state, $division, $conference)
    {
        $this->team_id = $team_id;
        $this->team_name = $team_name;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->active = $active;
        $this->city = $city;
        $this->abbreviation = $abbreviation;
        $this->state = $state;
        $this->division = $division;
        $this->conference = $conference;
    }

    function jsonSerialize()
    {
        return array(
             'team_id' => $this->team_id,
            'team_name' => $this->team_name,
        'first_name' => $this->first_name,
        'last_name' => $this->last_name,
        'active' => $this->active,
        'city' => $this->city,
        'abbreviation' => $this->abbreviation,
        'state' => $this->state,
        'division' => $this->division,
        'conference' => $this->conference
        );
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
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active)
    {
        $this->active = $active;
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
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }

    /**
     * @param mixed $abbreviation
     */
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;
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
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * @param mixed $division
     */
    public function setDivision($division)
    {
        $this->division = $division;
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



}