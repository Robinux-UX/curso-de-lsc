<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Llamo al CSS propio de bootstrap-->
    <link rel="icon" href="img/icono.png">	
    <link rel="stylesheet" href="css/estilo.css">  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Título de la página-->
    <title>Curso de Lengua de Señas Colombia Web</title>
  
</head>
<?php
include "header.php";

$nombre = $_REQUEST['nombre'];
echo "Bienvenido a ";
echo $_REQUEST['nombre'];
?>

<h1>Bienvenido la pagina <?php echo $nombre ?></h1>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>