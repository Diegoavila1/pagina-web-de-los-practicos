<?php

class mayusculas{
    private $texto;
    
    public function __construct($texto){
        $this->texto = $texto;
    }

    public function getTexto(){
        return $this->texto;
    }

    public function setTexto($newTexto){
        $this->texto = $newTexto;
    }

    public function mayusculas(){
        return strtoupper($this->getTexto());
    }
}