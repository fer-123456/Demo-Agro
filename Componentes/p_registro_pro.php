
<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$numcelular=$_POST['numcelular'];
$cedula=$_POST['cedula'];
$password=$_POST['password'];
$conpassword=$_POST['conpassword'];
$departamento=$_POST['departamento'];
$ciudad=$_POST['ciudad'];
$nomfinca=$_POST['nomfinca'];
$vereda=$_POST['vereda'];


// Modificar el último carácter de un string
$ultimo = $ciudad[strlen($ciudad)-1];


$ultimo2 = $vereda[strlen($vereda)-1];




if (strcmp($password, $conpassword) === 0){

    
    mysqli_query($con, "INSERT INTO personas(nombres,apellidos,celular,cedula) VALUES ('$nombre','$apellido','$numcelular','$cedula')");
    

    $id_persona = "SELECT id_persona from personas where cedula='$cedula'";
    $existe = mysqli_query( $con, $id_persona);
    $filas=mysqli_num_rows($existe);

    mysqli_query($con, "INSERT INTO p_usuarios(login,password,id_persona) VALUES ('$nombre','$password','$filas')");
    



    mysqli_query($con, "INSERT INTO productores(nombre_finca,id_ciudad,id_vereda,id_zona) VALUES ('$nomfinca','$ultimo','$ultimo2','1')");


    echo'<script type="text/javascript">

                        alert("Datos guardados correctamente");
                        location.href = "C_Login_productor.php";
                        </script>';

    
}

else{

    echo'<script type="text/javascript">
    alert("Las contraseñas  no son las mismas");
    location.href = "P_Registro_Productor.php";
    
    </script>';


   

}


?>
