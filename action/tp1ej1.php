<html>
    <?php
    include_once '../vista/tp1/ejercicio1.php';
    include_once '../control/vernumero.php';
    include_once '../vista/tp1/style.css';
    

    if(isset($_POST['numero'])){
        $numero = $_POST['numero'];
        $tipoNumero = new TipoNumero($numero);
        $tipo = "<p>el numero es {$tipoNumero->tipo()}</p>";
    } else {
        echo "<p> No se ingreso ningun numero </p>";
    }

    ?>
    <script type="text/javaScript">
        document.getElementById('resultado').innerHMTL += "<?php  $tipo; ?>";
    </script>
</html>