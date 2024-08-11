<?php

include_once '../control/vernumero.php';

if(isset($_POST['numero'])){
    $numero = $_POST['numero'];
    $tipoNumero = new TipoNumero($numero);
    $tipo = $tipoNumero->tipo();
    echo "<p> El numero es $tipo </p>";
} else {
    echo "<p> No se ingreso ningun numero </p>";
}

?>