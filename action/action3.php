<?php
if ($_GET) {
    include "../control/saludo.php";
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $edad = $_GET['edad'];
    $direccion = $_GET['direccion'];
    echo $nombre;
    $saludo2 = new saludo($nombre, $apellido, $edad, $direccion);
    echo "<p>" . $saludo2->saludo() . "</p>";
} else if ($_POST){
    include "../control/saludo.php";
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $direccion = $_POST['direccion'];
    echo $nombre;
    $saludo2 = new saludo($nombre, $apellido, $edad, $direccion);
    echo "<p>" . $saludo2->saludo() . "</p>";
} else{
    echo "no se recibieron datos";
}

echo "<a href='../vista/tp1/ejercicio3.php'><button>volver</button></a>";