
<?php
include '../control/tipoNumero.php';
if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];
    $obj = new tipoNumero($numero);
    echo "<p>El numero ingresado era {$obj->tipo()}</p>";
} else {
    echo "<p>Ingrese un numero</p>";
}

echo "<a href='../vista/tp1/ejercicio1.php'> <button>volver</button></a>";