<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Número</title>
    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!--BOOSTRAP-->
</head>
<body>
    <div class="container mt-5">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST['numero'];
            if ($numero > 0) {
                echo "<div class='alert alert-success'>El número $numero es positivo.</div>";
            } elseif ($numero == 0) {
                echo "<div class='alert alert-warning'>El número es cero.</div>";
            } else {
                echo "<div class='alert alert-danger'>El número $numero es negativo.</div>";
            }
        }
        ?>
        <a href="../vista/ejercicio1.php" class="btn btn-primary mt-3">Volver</a>
    </div>
</body>
</html>