<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejemplo MVC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>
</head>
<body>
    
<br>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="vistas/paginas/registro.php">Registro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vistas/paginas/ingreso.php">Ingreso</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="vistas/paginas/inicio.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="vistas/paginas/salir.php">Salir</a>
      </li>
    </ul>
  </nav>
<div class="container-fluid bg-light">
    <div class="container py-5">
    <?php
    
    #include"paginas/salir.php";
    
    ?>
   
    </div>
</div>



    


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>