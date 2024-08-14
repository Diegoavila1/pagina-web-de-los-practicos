<?php

class esMayor{
    private $edad; 

    public function __construct($edad){
        $this->edad = $edad;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }


    public function esMayor(){
        return $this->getEdad() >= 18;
    }

}