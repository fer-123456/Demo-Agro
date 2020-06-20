<?php
include("conexion.php");
$con=conectar();

$direccion=$_POST['direccion'];
$punto_referencia=$_POST['punto_referencia'];
$barrio=$_POST['barrio'];
$ciudad=$_POST['ciudad'];
$departamento=$_POST['departamento'];


mysqli_query($con, "INSERT INTO `oferta_productos` ( `id_productor`, `id_producto`, `id_calidad`, `cantidad_disponible`, `id_unidad`, `precio_x_unidad`, `precio_negociables`,   `Id_disponibilidad`, `id_asesor`, `fecha_publica`, `fecha_vencimiento`, `cosecha`, `descripcion`, `direccion`, `punto_referencia`, `barrio`, `ciudad`, `departamento`) 


VALUES ('2', '2', '2', '', '1','','','2', '1','','', '', '','$direccion', '$punto_referencia', '$barrio', '$ciudad', '$departamento')");


echo'<script type="text/javascript">

                        
                        location.href = "Confirmacion_producto.php";
                        </script>';



?>