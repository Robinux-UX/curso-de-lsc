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

<!--*******************************************************************************************-->
<body class="aicde1">
  <!--*******************************************************************************************-->
  <!--encabezamiento-->
  <?php 
  include "header.php";
   ?>
  
  <!--*******************************************************************************************-->
  <!--Carrusel-->
  <div class="row">
    <div class="col-sm-1 col-md-2 col-lg-2 col-xl-2 aicde1">
    </div>
  <div class="col-sm-10 col-md-8 col-lg- col-xl-8">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
    </ol>
    <!--Primera imagen-->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/img1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="display-4 bg-dark">Curso de lengua de seña</h5>
          <p class="h3 alert alert-info">¿Quieres aprender para la lengua de señas Colombiana?</p>
        </div>
      </div>
      <!--Segunda imagen-->
      <div class="carousel-item">
        <img src="img/img2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p class="h3 alert alert-info">Algunos clientes tienen problemas con la comunicación</p> 
          <p class="h3 alert alert-info">Por discapacidad <strong>auditivo y sordo</strong></p> 
        </div>
      </div>
      <!--Tercera imagen-->
      <div class="carousel-item">
        <img src="img/img3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p></p>
        </div>
      </div>
      <!--cuarto imagen-->
        <div class="carousel-item">
          <img src="img/img4.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <p class="h3 alert alert-success">La familia se conecta con la oferta televisor</p>
          </div>
        </div>
      <!--Quinto imagen-->
        <div class="carousel-item">
          <img src="img/img5.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <p class="h3 alert alert-primary">El jefe da indicaciones en lengua de señas a sus trabajadores</p>
          </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterios</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">siguientes</span>
    </a>
  </div>
  </div>
    <div class="col-sm-1 col-md-2 col-lg-2 col-xl-2 aicde1">
    </div>
  </div>
  <!--*******************************************************************************************-->
  <!-- -->
  <div class="row">
    <div class="col-sm-1 col-md-2 col-lg-2 col-xl-2 aicde1">
    </div>
    <div class="col-sm-10 col-md-8 col-lg- col-xl-8 bg-primay my-4">
      <div class="jumbotron">
        <h1 class="display-4"> Acerca del curso</h1>
        <p class="lead">El curso de lengua de señas tiene el propósito que el estudiante conozca, comprenda y aplique los fundamentos de la lengua de señas, con el fin de fomentar la inclusión, la comunicación y la interacción con las personas que posean alguna discapacidad auditiva. Es fácil de aprender y es recomendado para personas con alguna condición de sordera o individuos que deseen capacitarse para la atención de personas con dicha condición.</p>
      </div>
    </div>
  </div>
    <div class="col-sm-1 col-md-2 col-lg-2 col-xl-2 aicde1">
    </div>
  
  <?php 
  include "footer.php"; 
  ?>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<srcipt src="js/script.js"></srcipt>
</body>
</html>