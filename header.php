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
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark h6">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="justify-content-center align-items-center"> 
          <div class="jumbotron" id="fondo2" width="230px" height="auto">
          <a href="index.php"><img src="img/logo.png" class="img-responsive" alt="Logotipo" width="220px" height="auto"></a>
          </div>
        </div>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto" >
        <li class="nav-item">
          <a class="nav-link mx-3" href="index.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mr-3" >
          <a class="nav-link" href="curso.php">Curso LSC</a>
        </li>
        <li class="naav-item mr-3">
          <a href="contacto.php" class="nav-link">Contacto</a>
        </li>
      </ul>
      
      
      <!--*******************************************************************************************-->
      <!--Inicia sesion-->
      <form class="form-inline my-2 my-lg-0 mx-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal">
          Iniciar sesión
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
                <form class="text-center border border-light p-5 container-xl" action="controlador/login.php" method="post">
                  
                  <p class="h4 mb-4"></p>
              
                  <!-- Correo electónico -->
                  <input type="text" id="usuario" class="form-control mb-4" placeholder="Correo electónico" name="usuario">
              
                  <!-- Password -->
                  <input type="password" id="contraseña" class="form-control mb-4" placeholder="Contraseña" name="contraseña">
                  
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

                <form class="text-center border border-light p-5" action="controlador/registro.php" method="post">
                  <p class="h4 mb-4">Registrate</p>
                  <div class="form-row mb-4">
                    <div class="col">
                      <!-- primer nombre-->

                      <input tyep="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nombre" Method="">
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

  <script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
