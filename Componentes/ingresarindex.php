<?php
 include("conexion.php");
 $conn=conectar();
 session_start();

$login1 = $_POST['login'];
$password1 = $_POST['password'];

//echo "<br/> &nbsp; El login es: ". $login1. " y el password es: ". $password1. "";

$consulta1 = "SELECT * from p_usuarios where  login = '$login1' and password = '$password1'";

//echo "$consulta1";

$existe = mysqli_query( $conn, $consulta1 ) or die ( "Error al realizar la consulta");

$filas=mysqli_num_rows($existe);
if ($filas > 0){

  $_SESSION['username'] = $login1;
  header('Location: inicio2.php');
  
                }
                  else{
                    echo'<script type="text/javascript">
                    alert("Usuario y/o Contraseña erroneos");
                    window.location.href="C_Login_productor.php";

                    </script>';
                    
                    }


?>
