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
<body>
	
<?php 
include "header.php";
 ?>

  <!--*******************************************************************************************-->
  <!-- -->
  <div class="row">
    <div class="col-sm-1 col-md-2 col-lg-2 col-xl-2 aicde1">
    </div>
    <div class="col-sm-10 col-md-8 col-lg-8 col-xl-8 bg-primay my-4">
      <div class="jumbotron">
        <h1 class="display-4"> Contacto</h1>
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput3">Nombre completo</label>
            <input class="form-control form-control-lg" type="text" id="exampleFormControlInput3" placeholder="Nombre completo">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Correo eletrónico</label>
            <input type="email" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput3">Ocupación</label>
            <input class="form-control form-control-lg" type="text" id="exampleFormControlInput3" placeholder="Ocupacion">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Tienes discapacidad:</label>
            <select class="form-control form-control-lg" id="exampleFormControlSelect1">
              <option>Sordo</option>
              <option>Auditivo</option>
              <option>Fiscio</option>
              <option>Intelectual</option>
              <option>visual</option>
              <option>Ninguno</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Sexo gereno</label>
            <select class="form-control form-control-lg" id="exampleFormControlSelect1">
              <option>Masculino</option>
              <option>femenino</option>
              <option>Otro genero</option>
            </select>
          </div>
          <br>
          <input class="form-control form-control-lg btn btn-primary" type="submit" placeholder="Enviar">
        </form>  
      </div>
      <br>
        
      <div class="text-center">
        <ul class="list-unstyled my-auto"> 
          <li>Carrera 13 A N° 21 - 54</li>
          <li><strong>Tel:</strong> 266 666 6666</li>
          <li><strong>Cel:</strong> +57 30221015551</li>
          <li><strong>Horario de atención:</strong> Lunes a Viernes 8:00 am a 5:00 pm</li>
          <li><strong>Correo eletrónico:</strong> robinson-espejo@curso.lsc.co</li>
          <li><strong>Correo eletrónico:</strong> david-arias@curso.lsc.co</li>
        </ul>
      
    
        <hr class="bg-dark phr" width="90%">
        <h3 style="color: rgb(14, 11, 11);">Redes sociales</h3>
        <ul class="text-light list-unstyled">
          <li class="ml-4"><a href="https://www.facebook.com/" class="text-decoration-none mr-2" target="_blank"><img src="img/facebook.png" class="mr-2" width="32px" height="auto">cursodelenguadeseñascolombia </a></li><br>
          <li class="ml-4"><a href="https://twitter.com/" class="text-decoration-none mr-2" target="_blank"><img src="img/twitter.png" class="mr-2" width="32px" height="auto">#cursodelenguadeseñascolombia </a></li><br>
          <li class="ml-4"><a href="https://www.instagram.com/" class="text-decoration-none mr-2" target="_blank"><img src="img/instagram.png" class="mr-2" width="32px" height="auto">@cursodelenguadeseñascolombia</a></li><br>
        </ul>
      </div>
    </div>
    <div class="col-sm-1 col-md-2 col-lg-2 col-xl-2 aicde1">
    </div>
  </div>
  
  <?php
include "footer.php";
?>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
