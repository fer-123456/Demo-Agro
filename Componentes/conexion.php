<?php
function conectar()
{
$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "agro";
$con = mysqli_connect( $servidor, $usuario,$password ) or die ("No se ha podido conectar al servidor de Base de datos");
mysqli_select_db($con,$basededatos) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

return $con; 

}

?> 