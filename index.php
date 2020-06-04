<<<<<<< HEAD
<?php require_once("index.html") ?>
=======
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Llamo al CSS propio de bootstrap-->
    <link rel="icon" href="img/icono.png">	
    <link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!-- Título de la página-->
    <title>Curso de Lengua de Señas Colombia Web</title>
  
</head>
<!--*******************************************************************************************-->
<body>
  <!--*******************************************************************************************-->
  <!--encabezamiento-->
  <header>
   <div class="d-flex justify-content-center align-items-center"> 
      <div class="jumbotron fondo2">
          <a href="index.php"><img src="img/logo.png" class="img-responsive" alt="Logotipo" width="383px" height="auto"></a>
      </div>
    </div>
  </header>
  
  <!--*******************************************************************************************-->
  <!--Barra navegador-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark h6">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"> </span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto" >
        <li class="nav-item">
          <a class="nav-link mx-3" href="index.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mr-3" >
          <a class="nav-link" href="curso.html">Curso LSC</a>
        </li>
        <li class="naav-item mr-3">
          <a href="contacto.html" class="nav-link">Contacto</a>
        </li>
      </ul>
      
      
      <!--*******************************************************************************************-->
      <!--Inicia sesion-->
      <form class="form-inline my-2 my-lg-0 mx-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal">
          Inciar sesión
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Inicias sesión en tu cuenta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="text-center border border-light p-5 container-xl" action="#!">
                  
                  <p class="h4 mb-4"></p>
              
                  <!-- Correo electónico -->
                  <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Correo electónico">
              
                  <!-- Password -->
                  <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Contraseña">
                  
                  <div class="d-flex justify-content-around">
                    <div>
                      <!-- recuerdame -->
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                              <label class="custom-control-label" for="defaultLoginFormRemember">Recuérdame</label>
                            </div>
                      </div>
                      <div>
                        <!-- Has olvida la contraseñ -->
                          <a href="">¿Has olvida la contraseña?</a>
                        </div>
                      </div>
                      
                      <!--Botonn Inicia sesion -->
                  <button class="btn btn-outline-dark btn-block my-4" type="submit">Iniciar sesion</button>
              
                  <!-- Register -->
                  <p>o ¿No tienes una cuenta?
                      <a href="">Registrate</a>
                    </p>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </form>
      
      
      <!--*******************************************************************************************-->
      <!--Registrate-->
      <form class="form-inline my-2 my-lg-0 mx-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
          Regístrate
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title mb-4" id="staticBackdropLabel">Regístrate crear en tu cuenta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form class="text-center border border-light p-5" action="#!">
                  <p class="h4 mb-4">Registrate</p>
                  <div class="form-row mb-4">
                    <div class="col">
                      <!-- primer nombre-->
                      <input tyep="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nombre">
                    </div>
                    <p></p>
                    <div class="col">
                      <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Apellidos">
                    </div>
                  </div>
                  <p></p>
                  <!--Correo electronico-->
                  <input type="email" id="defaultRegisterFormEmail" class="form-control" placeholder="Correo electrónico">
                  <p></p>
                  <!--contraseña-->
                  <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Contraseña" aria-describedby="dedfaultRegisterFormPasswordHelpBlock">
                  <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                    Al menos 8 caracteres y 1 dígito
                  </small>
                  <p></p>
                  <!--numero celuar-->
                  <input type="number" id="defaultRegisterPhonePassword" class="form-control" placeholder="Numero celular" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                  <small id="defaultRegisterFormPhoneHelpBlock" class="From-text text-muted mb-4">
                    Opcional: para autenticación de tres pasos
                  </small>
                  <p></p>
                  <!--Boletin informativo-->
                  <div class="custom-control custom-checkbox">
                    <input tyep="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
                    <label class="custom-control-label" for="defaultRegisterFormNesletter">Suscríbete a nuestro boletín</label>
                  </div>
                  
                  <!--Boton Registrate-->
                  <buttom class="btn btn-outline-danger mb-4 btn-block"  type="submit">Regístrate</buttom>
                  
                  <!--Terminos de servicio-->
                  <p>Al hacer clic en <em>Registrarse</em>, acepta nuestros <a href="" target="_blank">términos de servicio</a></p>
                </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </nav>
  
  
  <!--*******************************************************************************************-->
  <!--Carrusel-->
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
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
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
    <div class="col-sm-1 col-md-2 col-lg-2 col-xl-2 aicde1">
    </div>
  </div>
  
  <!--*******************************************************************************************-->
  <!--Pagina Pie-->
 
  <footer class="text-center p-1 fondo1">
    <div class="row">
      <div class="col-md-1 col-lg-2 col-xl-2">
        <!--Espacio de tamaño-->
      </div>
      <!--Columna 1-->
      <div class="col-xm-12 col-sm-6 col-md-5 col-lg-4 col-xl-4 mt-4">
        <h3 style="color: white;">Sitio de interés</h3>
        <hr class="bg-light phr" width="90%">
        <ul class="text-light">
          <li><a href="http://aprende.colombiaaprende.edu.co/cainicio" class="text-decoration-none text-light float-left" target="_blank">Colombia aprende</a></li>
          <li><a href="https://www.banrepcultural.org/senas-paz/index.php" class="text-decoration-none text-light float-left" target="_blank">Señas para la paz</a></li>
          <li><a href="https://www.colombiacompra.gov.co/" class="text-decoration-none text-light float-left" target="_blank">Colombia compra eficiente</a></li>
        </ul>
        
        <hr class="bg-light phr" width="90%">
        <h3 style="color: white;">Redes sociales</h3>
        <ul class="text-light list-unstyled">
          <li class="ml-4"><a href="https://www.facebook.com/" class="text-decoration-none text-light float-left mr-3" target="_blank"><img src="img/facebook.png" class="mr-4" width="14px" height="auto">cursodelenguadeseñascolombia </a></li>
          <li class="ml-4"><a href="https://twitter.com/" class="text-decoration-none text-light float-left mr-3" target="_blank"><img src="img/twitter.png" class="mr-4" width="14px" height="auto">#cursodelenguadeseñascolombia </a></li>
          <li class="ml-4"><a href="https://www.instagram.com/" class="text-decoration-none text-light float-left mr-3" target="_blank"><img src="img/instagram.png" class="mr-4" width="14px" height="auto">@cursodelenguadeseñascolombia</a></li>
          
        </ul>
      </div>
      <!--Columna 2-->
      <div class="col-xm-12 col-sm-6 col-md-5 col-lg-4 col-xl-4 mt-4">
        <img src="img/logo-white.png" width="220px" height="auto">
        <p></p>
        <a href="contacto.html"><button class="btn btn-outline-light mb-2">Contactenos aquí</button></a>
        <ul class="list-unstyled text-light my-auto"> 
          <li>Carrera 13 A N° 21 - 54</li>
          <li><strong>Tel:</strong> 266 666 6666</li>
          <li><strong>Cel:</strong> +57 30221015551</li>
          <li><strong>Horario de atención:</strong> Lunes a Viernes 8:00 am a 5:00 pm</li>
          <li><strong>Correo eletrónico:</strong> robinson-espejo@curso.lsc.co</li>
          <li><strong>Correo eletrónico:</strong> david-arias@curso.lsc.co</li>
        </ul>
      </div>
      <!--Copyrigth-->
      <div class="col-md-1 col-lg-2 col-xl-2">
        <!--Espacio de tamaño-->
      </div>
    </div>
    <hr class="bg-primary" width="78%">
      <div class="footer-copyright text-center py-1 text-light">&copy; 2020 Copyright: <a href="index.php" class="text-info">Curso-lsc-Web.com</a>
      </div>
      <hr class="bg-primary" width="78%">
      <!--Creativo Commons-->
      <div class="py-1 text-light"> <img src="img/cc.jpg" width="120px" height="auto"><p class="my-1">Este obra está bajo una licencia de Creative Commons </p><p class="my-1">Reconocimiento-NoComercial-SinObraDerivada 4.0 Internacional.</p>
      </div>
  </footer>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
>>>>>>> a000c88e787cfa819a3ad9c5ddbdf9450b7cf2e4
