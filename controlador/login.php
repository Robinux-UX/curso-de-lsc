<?php
session_start(); 
ob_start();

include_once 'conexion.php';
	$usuario=isset($_POST['usuario'])?$_POST['usuario']:"";
	$con=new Conexion();
	$con=$con->conectar();	 
	if($con){        
            $sql="SELECT * FROM login WHERE usuario = '$_POST[usuario]' AND contrasena = '$_POST[contrasena]' ";
                    $consulta=$con->prepare($sql);
                    $consulta->execute();                     
                    if ($fila=$consulta->fetch(PDO::FETCH_ASSOC)){  
                        $_SESSION['loggedin'] = true;
                        $_SESSION['usuario'] = $fila['usuario']; 
                         header("Location: ../resultado.php");
                         exit;
                    } 
                    /*else {
                        echo "El usuario no existe";
                        header('refresh:4; url=../index.php'); 
                    }*/
             }       
             ob_end_flush();    
?>