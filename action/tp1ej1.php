<?php

include_once '../control/vernumero.php';

if(isset($_POST['numero'])){
    $numero = $_POST['numero'];
    $tipoNumero = new TipoNumero();
    $tipoNumero->setNumero($numero);
    $tipo = $tipoNumero->tipo();
    return "<p>El numero es $tipo</p>";
}