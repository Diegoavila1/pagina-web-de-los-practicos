<?php
include '../control/esMayor.php';
if($_GET){
    $edad = $_GET['edad'];
    $esMayor = new esMayor($edad);
    if($esMayor->esMayor()){
        echo "Es mayor de edad";
    } else{
        echo "Es menor de edad";
    }
} else if($_POST){
    $edad = $_POST['edad'];
    $esMayor = new esMayor($edad);
    if($esMayor->esMayor()){
        echo "Es mayor de edad";
    } else{
        echo "Es menor de edad";
    }
} else{
    echo "no se recibieron datos";
}