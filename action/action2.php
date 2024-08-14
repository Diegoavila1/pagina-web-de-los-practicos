<?php
include "../control/mayusculas.php";
$nombre = "juan";
$apellido = "perez";
$edad = 30;
$direccion = "calle falsa 123";
$mayusculas = new mayusculas($nombre);
$mayusculas2 = new mayusculas($apellido);
$mayusculas3 = new mayusculas($edad);
$mayusculas4 = new mayusculas($direccion);
echo "<p>Nombre: " . $mayusculas->mayusculas() . "</p>";
echo "<p>Apellido: " . $mayusculas2->mayusculas() . "</p>";
echo "<p>Edad: " . $mayusculas3->mayusculas() . "</p>";
echo "<p>Direccion: " . $mayusculas4->mayusculas() . "</p>";
echo "<a href='../vista/tp1/ejercicio2.php'> <button>volver</button></a>";
