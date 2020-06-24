<?php
include("conexion.php");
$con=conectar();


$cantidad=$_POST['cantidad'];
$peso=$_POST['peso'];
$precio=$_POST['precio'];
$negociable=$_POST['negociable'];
$fecha1=$_POST['fecha1'];
$fecha2=$_POST['fecha2'];
$disponibilidad=$_POST['disponibilidad'];
$calidad=$_POST['calidad'];
$descripcion=$_POST['descripcion'];
$cosecha=$_POST['cosecha'];


$ultimo3 = $peso[strlen($peso)-1];
$ultimo = $disponibilidad[strlen($disponibilidad)-1];
$ultimo2 = $calidad[strlen($calidad)-1];






mysqli_query($con, "INSERT INTO `oferta_productos` ( `id_productor`, `id_producto`, `id_calidad`, `cantidad_disponible`, `id_unidad`, `precio_x_unidad`, `precio_negociables`,   `Id_disponibilidad`, `id_asesor`, `fecha_publica`, `fecha_vencimiento`, `cosecha`, `descripcion`) 


VALUES ('2', '2', '$ultimo2', '$cantidad', '$ultimo3', '$precio', '$negociable', '$ultimo ', '1', '$fecha1', '$fecha2', '$cosecha', '$descripcion')");

echo'<script type="text/javascript">

                        
                        location.href = "formulario2_producto.php";
                        </script>';




?>
