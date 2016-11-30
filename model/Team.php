<?php

/**
 * Created by PhpStorm.
 * User: apol
 * Date: 24/11/16
 * Time: 9:37
 */
class Team implements JsonSerializable
{
    private $codigo;
    private $full_name;
    private $city;
    private $abrebiacion;
    private $state;
    private $division;

    function __construct($codigo, $name, $city, $abrebiacion, $state, $division)
    {
        $this->codigo = $codigo;
        $this->full_name = $name;
        $this->city = $city;
        $this->abrebiacion = $abrebiacion;
        $this->state = $state;
        $this->division = $division;
    }

    function jsonSerialize()
    {
        return array(
            'codigo' => $this->codigo,
            'full_name' => $this->full_name,
            'city' => $this->city,
            'abrebiacon' => $this->abrebiacion,
            'state' => $this->state,
            'division' => $this->division
        );
    }

    function __sleep()
    {
        return array('codigo', 'full_name', 'city', 'abrebiacion', 'state', 'division');
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->full_name;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getAbrebiacion()
    {
        return $this->abrebiacion;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return mixed
     */
    public function getDivision()
    {
        return $this->division;
    }




}