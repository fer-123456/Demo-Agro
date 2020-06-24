<?php
session_start();
$usuario=$_SESSION['username'];
?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="/AGRO/Estilos/Estilos.css">
    <link rel="stylesheet" type="text/css" href="/AGRO-RISARALDA/Estilos/confirmacion.css">
 

    <title>Registro Productor </title>

 

  </head>

  <body>

 

    <!--  header ---------------------------------------------------------------------->

    <div class="container">

 

<br>





<div class="">

       <img src="\AGRO\imagenes\ENCABEZADOLogo.png" alt="De mi tierrita">


</div>

</div>

<div class="container">
<div class="form-group">
  <br>
  <hr style="COMUNES1separadorinicio">
</div>
</div>




<!--  Formulario ------------col-12 col-xs-12 col-sm-12 col-lg-12-------------------------------->

 
<div class="container">
<div id="rectangle">

 

    <div id="circulo"><h3 id="hp">Producto</h3></div> 

    <div id="circulo1"><h3 id="hc">Caracteristicas</h3></div>  

    <div id="circulo2"><h3 id="hu">Ubicación</h3></div>

 

<br><br>

 

    <div class="form-group">

    <img src="\AGRO\imagenes\farmer.png" alt="De mi tierrita" id="naranja"><br><br>

    

    <h1 id="carac">Ya esta a la venta su producto<b></b></h1>

    </div>
    <br>
    <a href="" style="position :relative; left:220px; top : -185px; color :#444444; font : bold 18px/21px Arial;" ><?php echo "! Listo, $usuario ¡"?> </a>


    <br>

 

    

</div>

<br>

<br>

<br>

<br>

<br>

<br>

<br>

<br>

<br>

<br>

 

<div id="rectangulo">

<br>

   

      <h4 id="linea1">Su producto Lulos con precio $50.000<br> 

      <h3 id="linea2">con pago contra entrega esta a la venta.

      <br>

      <br>

      <h3 id="linea3">Pronto su comprador estará <br> 

      <h3 id="linea4">en contacto con usted.

 

  

 

</div>

</div>

<div class="container">

<div class="row">

      <div class="col-xs-4 col-sm-4">

          <label for=""></label>

      </div>

      <div class="col-xs-4 col-sm-4">

         <button type="button" class="ESTILOS1botones" name="cancelar"id="finalizar">FINALIZAR</button>

         <script type="text/javascript">

           document.getElementById("finalizar").onclick = function () {

           location.href = "inicio.php";

           };

         </script>

        

      </div>

      <div class="col-xs-4 col-sm-4">

         <button type="submit" class="ESTILOS1botones" name="venproducto"id="venproducto">Vender otro producto </button>

         <script type="text/javascript">

           document.getElementById("venproducto").onclick = function () {

           location.href = "regproducto.php";

           };

         </script>

      </div>

</div>

</div>

 

 

 <!--  Formulario ------------col-12 col-xs-12 col-sm-12 col-lg-12-------------------------------->




 <style>

 

  

</style>

 

<!-- footer -------------------------------------------->

 

<br>




<br>

 

</div>





<!-- jQuery first, then Tether, then Bootstrap JS. -->

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
</html>