<?php

class Futbolista
{
    private $nombre;
    private $cumple;
    private $pais;
    private $dorsal;
    private $posicion;
    private $goles;
    private $partidos;
    private $minutos;
    private $amarillas;
    private $rojas;

    public function __construct($nombre, DateTime $cumple, $pais, int $dorsal, $posicion, int $goles, int $partidos, int $minutos, int $amarillas, int $rojas)
    {
        $this->nombre = $nombre;
        $this->cumple = $cumple;
        $this->pais = $pais;
        $this->dorsal = $dorsal;
        $this->posicion = $posicion;
        $this->goles = $goles;
        $this->partidos = $partidos;
        $this->minutos = $minutos;
        $this->amarillas = $amarillas;
        $this->rojas = $rojas;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getCumple()
    {
        return $this->cumple;
    }

    public function setCumple($cumple)
    {
        $this->cumple = $cumple;
        return $this;
    }

    public function getPais()
    {
        return $this->pais;
    }

    public function setPais($pais)
    {
        $this->pais = $pais;
        return $this;
    }

    public function getDorsal()
    {
        return $this->dorsal;
    }

    public function setDorsal($dorsal)
    {
        $this->dorsal = $dorsal;
        return $this;
    }

    public function getPosicion()
    {
        return $this->posicion;
    }

    public function setPosicion($posicion)
    {
        $this->posicion = $posicion;
        return $this;
    }

    public function getGoles()
    {
        return $this->goles;
    }

    public function setGoles($goles)
    {
        $this->goles = $goles;
        return $this;
    }

    public function getPartidos()
    {
        return $this->partidos;
    }

    public function setPartidos($partidos)
    {
        $this->partidos = $partidos;
        return $this;
    }

    public function getMinutos()
    {
        return $this->minutos;
    }

    public function setMinutos($minutos)
    {
        $this->minutos = $minutos;
        return $this;
    }

    public function getAmarillas()
    {
        return $this->amarillas;
    }

    public function setAmarillas($amarillas)
    {
        $this->amarillas = $amarillas;
        return $this;
    }

    public function getRojas()
    {
        return $this->rojas;
    }

    public function setRojas($rojas)
    {
        $this->rojas = $rojas;
        return $this;
    }

    public function age() : int{
        $edad =  (new DateTime())->diff($this->getCumple())->y;
        return $edad;
    }
}