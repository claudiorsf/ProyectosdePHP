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
        <a class="nav-link" href="index.php?pagina=registro">Registro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="index.php?pagina=salir">Salir</a>
      </li>
    </ul>
  </nav>
<div class="container-fluid bg-light">
    <div class="container py-5">
    <?php
    
    
    #isset determina si una variable esta definida y no es NULL
if (isset($_GET["pagina"])){
   if ($_GET["pagina"]=="registro"||
      $_GET["pagina"]=="ingreso"||
      $_GET["pagina"]=="inicio"||
      $_GET["pagina"]=="salir"
      )
      {echo "holla";

      include "paginas/".$_GET["pagina"].".php";
    }else{echo " chau";}



}else{
    include "paginas/registro.php";
    echo "hola";

}

    


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