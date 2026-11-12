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

    public function getAmarilla()
    {
        return $this->amarillas;
    }

    public function setAmarilla($amarillas)
    {
        $this->amarillas = $amarillas;
        return $this;
    }

    public function getRoja()
    {
        return $this->rojas;
    }

    public function setRoja($rojas)
    {
        $this->rojas = $rojas;
        return $this;
    }

    public function age() : int{
        $edad =  (new DateTime())->diff($this->getCumple())->y;
        return $edad;
    }

    public function score() : bool{
        if($this->getGoles() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function addCard(int $cantidad, string $color){
        if($color == 'Roja' || $color == 'Amarilla'){
            $set = "set" . $color;
            $get = "get" . $color;
            if($cantidad < 0 && ($this->$get() + $cantidad) < 0){
                $this->$set(0);
                return $this->$get();
            }
            $this->$set($this->$get() + $cantidad);
            return $this->$get();
        }else{
            throw new Exception("Prueba con 'Amarilla' o 'Roja' para el color de la tarjeta");
        }
    }

    public function playMinutes(int $min){
        if($min < 0){
            throw new Exception("Introduce una cantidad mayor a 0");
        }
        $this->setMinutos($this->getMinutos() + $min);
        return $this->getMinutos();
    }

    public function renderFila(): string
    {
        return "
            <tr>
                <td>{$this->getNombre()}</td>
                <td>{$this->age()}</td>
                <td>{$this->getPais()}</td>
                <td>{$this->getDorsal()}</td>
                <td>{$this->getPosicion()}</td>
                <td>{$this->getGoles()}</td>
                <td>{$this->getPartidos()}</td>
                <td>{$this->getMinutos()}</td>
                <td>{$this->getAmarilla()}</td>
                <td>{$this->getRoja()}</td>
            </tr>
        ";
    }

    public function render(): string
    {
        return "
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>País</th>
                        <th>Dorsal</th>
                        <th>Posición</th>
                        <th>Goles</th>
                        <th>Partidos</th>
                        <th>Minutos</th>
                        <th>Amarillas</th>
                        <th>Rojas</th>
                    </tr>
                </thead>

                <tbody>
                    {$this->renderFila()}
                </tbody>
            </table>
        ";
    }
}

class Equipo
{
    private $nombre;
    private $jugadores = [];
    private $partidos;
    private $ganados;
    private $perdidos;
    private $empates;
    private $gf;
    private $gc;
    
    public function __construct(string $name, Futbolista $f, int $matches, int $wins, 
    int $losts, int $ties, int$af, int $ec ){
        $this->nombre = $name;
        $this->jugadores[] = $f;
        $this->partidos = $matches;
        $this->ganados = $wins;
        $this->perdidos = $losts;
        $this->empates = $ties;
        $this->gf = $af;
        $this->gc = $ec;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }

    public function setJugador(Futbolista $f){
        $this->jugadores[] = $f;
    }

    public function setPartidos(int $matches){
        if($matches < 0){
            throw new Exception("Introduce un numero positivo.");
        }
        $this->partidos = $matches;
    }

    public function setVictorias(int $g){
        if($g < 0){
            throw new Exception("Introduce un numero positivo.");
        }
        $this->ganados = $g;
    }

    public function setDerrotas(int $p){
        if($p < 0){
            throw new Exception("Introduce un numero positivo.");
        }
        $this->perdidos = $p;
    }
    
    public function setEmpates(int $e){
        if($e < 0){
            throw new Exception("Introduce un numero positivo.");
        }
        $this->empates = $e;
    }
    
    public function setAFavor(int $g){
        if($g < 0){
            throw new Exception("Introduce un numero positivo.");
        }
        $this->gf = $g;
    }
    
    public function setEnContra(int $g){
        if($g < 0){
            throw new Exception("Introduce un numero positivo.");
        }
        $this->gc = $g;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getPartidos(){
        return $this->partidos;
    }

    public function getVictorias(){
        return $this->ganados;
    }

    public function getDerrotas(){
        return $this->perdidos;
    }
    
    public function getEmpates(){
        return $this->empates;
    }
    
    public function getAFavor(){
        return $this->gf;
    }
    
    public function getEnContra(){
        return $this->gc;
    }
    
    public function render(){
        echo "<b>Nombre:</b> " . $this->getNombre() . "</br>" .
        "<b>Partidos:</b> " . $this->getPartidos() . "</br>" .
        "<b>Victorias:</b> " . $this->getVictorias() . "</br>" .
        "<b>Derrotas:</b> " . $this->getDerrotas() . "</br>" .
        "<b>Empates:</b> " . $this->getEmpates() . "</br>" .
        "<b>Goles a favor:</b> " . $this->getAFavor() . "</br>" .
        "<b>Goles en contra:</b> " . $this->getEnContra() . "</br>" .
        "<b>Jugadores:</b></br><table>";
            for($i = 0; $i < count($this->jugadores); $i++){
                if($i == 0){
                    echo "<tr>
                        <td>PLAYER</td>
                        <td>AGE</td>
                        <td>COUNTRY</td>
                        <td>DORSAL</td>
                        <td>POSITION</td>
                        <td>GOALS</td>
                        <td>MATCHES</td>
                        <td>MINUTES</td>
                        <td>YELLOW CARDS</td>
                        <td>RED CARDS</td>
                    </tr>";
                }
                echo $this->jugadores[$i]->renderFila();
            }
        echo "</table>";
    }

    public function singlePlayer(Futbolista $f){
        $this->jugadores[] = $f;
    }


}