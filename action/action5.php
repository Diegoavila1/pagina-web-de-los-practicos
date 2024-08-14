<?php
include '../control/esMayor.php';

if ($_GET) {
    $edad = $_GET['edad'];
    $esMayor = new esMayor($edad);
    $sexo = $_GET['sexo'];
    if ($esMayor->esMayor()) {
        echo "Es mayor de edad";
    } else {
        echo "Es menor de edad";
    }

    if($sexo =="masculino"){
        echo " y es de sexo masculino";
    } else {
        echo " y es de sexo femenino";
    }
} else if ($_POST) {
    $edad = $_POST['edad'];
    $esMayor = new esMayor($edad);
    $sexo = $_POST['sexo'];
    if ($esMayor->esMayor()) {
        echo "Es mayor de edad";
    } else {
        echo "Es menor de edad";
    }

    if ($sexo == "masculino") {
        echo " y es de sexo masculino";
    } else {
        echo " y es de sexo femenino";
    }
} else {
    echo "no se recibieron datos";
}

echo "<br><a href='../vista/tp1/ejercicio5.php'><button>Volver</button></a>";