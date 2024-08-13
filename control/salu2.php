<?php

class salu2{
    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;

    public function __construct($nombre, $apellido, $edad, $direccion){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->direccion = $direccion;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($newNombre){
        $this->nombre = $newNombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($newApellido){
        $this->apellido = $newApellido;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($newEdad){
        $this->edad = $newEdad;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function setDireccion($newDireccion){
        $this->direccion = $newDireccion;
    }

    public function saludo(){
        return "Hola, yo soy {$this->getNombre()} {$this->getApellido()} tengo {$this->getEdad()} años y vivo en {$this->getDireccion()}";
    }
}