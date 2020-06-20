
<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$numcelular=$_POST['numcelular'];
$nombrefinca=$_POST['nombrefinca'];
$cedula=$_POST['cedula'];
$password=$_POST['password'];
$departamento=$_POST['departamento'];
$ciudad=$_POST['ciudad'];
$municipio=$_POST['municipio'];
$vereda=$_POST['vereda'];

mysqli_query($con, "INSERT INTO p_usuarios(login,password) VALUES ('$nombre','$password')");

mysqli_query($con, "INSERT INTO personas(nombres,apellidos,celular,nombre_finca,cedula,departamento,ciudad,municipio,vereda) VALUES ('$nombre','$apellido','$numcelular','$nombrefinca','$cedula','$departamento','$ciudad','$municipio','$vereda')");



echo'<script type="text/javascript">
                    alert("Dtos guardados correctamente");
                    window.location.href="inicio.php";

                    </script>';

?>