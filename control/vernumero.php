<?php
class TipoNumero{

    private $numero;

    public function __construct($numero){
        $this->numero = $numero;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($newNumero){
        $this->numero = $newNumero;
    }

    public function tipo(){
        if($this->getNumero() > 0){
            $tipo = 'positivo';
        }else if($this->getNumero() < 0){
            $tipo = 'negativo';
        }else{
            $tipo = 'cero';
        }

        return $tipo;
    }
}