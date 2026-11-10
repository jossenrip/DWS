<?php
    class Persona{
        private $dni;
        private $email;
        private $nombre;

        public function __construct($d, $n, $e){
            $this->dni = $d;
            $this->nombre = $n;
            $this->email = $e;
        }

        public function __set($name, $value){
            if($name == "nombre"){
                $this->nombre = $value;
            }else if($name == "dni"){
                $this->dni  = $value;
            }else if($name == "email"){
                $this->email  = $value;
            }else{
                echo "Parámetro inválido, prueba con 'nombre', 'dni', 'email' y 'valor'";
            }
        }

        public function __get($name){
            if($name == "nombre"){
                return $this->nombre;
            }else if($name == "dni"){
                return $this->dni;
            }else if($name == "email"){
                return $this->email;
            }else{
                echo "Parámetro inválido, prueba con 'nombre', 'dni' o 'email'";
            }
        }

        public function mostrar() : string{
            return "<p>Nombre: " . $this->nombre .
            " - DNI: " . $this->dni .
            " - Email: " . $this->email . "</p>";
        }
    }

    class Estudiante extends Persona{
        private $numExpediente;

        public function __construct($d, $n, $e, $ne){
            parent::__construct($d, $n, $e);
            $this->numExpediente = $ne;
        }

        public function __set($name, $value){
            if($name == "numExpediente"){
                $this->numExpediente  = $value;
            }else{
                parent::__set($name, $value);
            }
        }

        public function __get($name){
            if($name == "numExpediente"){
                return $this->numExpediente;
            }else{
                parent::__get($name);
            }
        }

        public function mostrar() : string{
            return "<p>Nombre: " . $this->__get("nombre") .
            " - DNI: " . $this->__get("dni") .
            " - Email: " . $this->__get("email") .
            " - Numero Expediente: " . $this->numExpediente . "</p>";
        }
    }
?>