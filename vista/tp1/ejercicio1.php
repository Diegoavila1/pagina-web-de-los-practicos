<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--BOOSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <!--BOOSTRAP-->

  <link rel="stylesheet" href="style.css">
  <title>Tp 1 ejercicio 1</title>
</head>

<body style="font-family: arial">

  <header class="navbar">
    <nav class="container-fluid d-flex justify-content-start border border-secondary rounded text-center">

      <a class="navbar-brand" href="index.html">
        <img src="https://cdn-icons-png.flaticon.com/512/8216/8216616.png" alt=""></a>


      <div class="dropdown me-2">
        <button class="btn btn-primary btn dropdown-toggle " type="button" data-bs-toggle="dropdown">
          Practico 1
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a class="dropdown-item" href="../tp1/ejercicio1.php">ejercicio 1</a></li>
          <li><a class="dropdown-item" href="../tp1/ejercicio2.php">ejercicio 2</a></li>
          <li><a class="dropdown-item" href="../tp1/ejercicio3.php">ejercicio 3</a></li>
          <li><a class="dropdown-item" href="../tp1/ejercicio4.php">ejercicio 4</a></li>
          <li><a class="dropdown-item" href="../tp1/ejercicio5.php">ejercicio 5</a></li>
          <li><a class="dropdown-item" href="../tp1/ejercicio6.php">ejercicio 6</a></li>
          <li><a class="dropdown-item" href="../tp1/ejercicio7.php">ejercicio 7</a></li>
          <li><a class="dropdown-item" href="../tp1/ejercicio8.php">ejercicio 8</a></li>
        </ul>
      </div>

      <div class="dropdown me-2">
        <button class="btn btn-primary btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
          Practico 2
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a class="dropdown-item" href="#">ejercicio 1</a></li>
          <li><a class="dropdown-item" href="#">ejercicio 2</a></li>
          <li><a class="dropdown-item" href="#">ejercicio 3</a></li>
          <li><a class="dropdown-item" href="#">ejercicio 4</a></li>
        </ul>
      </div>

      <div class="dropdown me-2">
        <button class="btn btn-primary btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
          Practico 3
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a class="dropdown-item" href="#">ejercicio 1</a></li>
          <li><a class="dropdown-item" href="#">ejercicio 2</a></li>
          <li><a class="dropdown-item" href="#">ejercicio 3</a></li>
        </ul>
      </div>
    </nav>
    
    <div class=""> 
      <img src="../imagenes/pedco.jpg" alt="">
      <img src="../imagenes/githubLogo.p" alt="">
      
    </div>
    
  </header>

  <main class="container" style="min-height:600px; background-color : rgb(85 153 254)">

    <div class="row border border-dark">

      <div class="col">
        <h1>Consigna: 1 </h1>
        <p>
          Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
          llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
          enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
          respuesta, que permita volver a la página anterior.</p>
      </div>
    </div>

    <div class="row border border-dark mt-5">
      <div class="col">

        <h1>Resolucion:</h1>

        <form action="../../action/action1.php" method="post">
          <div class="form-group d-inline-block" id="resultado">
            <label form="">Ingrese un numero</label>
            <input name="numero" type="number" class="form-control" placeholder="ej : 15" required>
          </div>

      </div>
      <div class="mt-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

      </form>
    </div>

    <div class="row border border-dark mt-5">
      <div class="col">
        <p>MOSTRAR CODIGO</p>
        <img src="" alt="" style="width: 50%;">
      </div>
    </div>


    </div>

  </main>

  <footer class="container-fluid footer">
    <div class="row text-start bg-dark">
      <div class="col">
        <p class="text-light">Programacion Web Dinamica 2024 @</p>
      </div>
    </div>
  </footer>

</body>

</html>