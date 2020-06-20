
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/AGRO/Estilos/Estilos.css">

    <title>Registro Productor </title>

  </head>
  <body>


    <!--  header ---------------------------------------------------------------------->
    <div class="container">

<br>
<div class="row-12">



<div class="">
       <img src="\AGRO\imagenes\ENCABEZADOLogo.png" alt="De mi tierrita">
</div>
</div>
</div>


<div class="container">
<div class="form-group">
  <br>
  <hr style="COMUNES1separadorinicio">
</div>
</div>



<!--  Formulario ------------col-12 col-xs-12 col-sm-12 col-lg-12-------------------------------->

<div id="rectangle">

    <div id="circulo"><h3 id="hp">Producto</h3></div> 
    <div id="circulo1"><h3 id="hc">Caracateristica</h3></div>  
    <div id="circulo2"><h3 id="hu">Ubicacion</h3></div>



    <div class="form-group">
        <label class="COMUNES1textobienvenida2" for="">Necesitamos unos dato mas<b></b></label>
    </div>

    <div class="form-group">
    <img src="\AGRO\imagenes\276.png" alt="De mi tierrita" id="naranja">
        <label class="COMUNES1textobienvenida2" id="carac">Cuales son las caracterisiticas de las naranjas que va a vender.<b></b></label>
    </div>

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



<div id ="container">
<div id ="container">


<form action="formulario_pro_insertar.php" method="post">
<div class="album py-5 bg-light">

         
<div class="row">
<div class="col-xs-4 col-sm-6">
<div class="ESTILOS1lineabajacampotexto">
<input class="form-control"  type="text" name="cantidad" placeholder="¿Cúanto va a vender?">
</div>
</div>
<div class="col-xs-4 col-sm-6">
<div class="ESTILOS1lineabajacampotexto">
<select class="form-control" name="peso">
<?php 

include("conexion.php");
$con=conectar();

$consulta="SELECT * FROM `p_unidadas_medida`";
$ejecutar=mysqli_query( $con,$consulta );

?>
<option >Como va a venderlo?</option>
<?php foreach ($ejecutar as $opciones):?>

<option value="<?php echo $opciones['unidad_medida'] , $opciones['id_unidad']?>"><?php echo $opciones['unidad_medida'] , $opciones['id_unidad']?></option>
<?php endforeach ?>
 </select>
</div>
</div>
</div>
<br>
<div class="row">
<div class="col-xs-4 col-sm-6">
<div class="ESTILOS1lineabajacampotexto">
<input class="form-control"  type="text" name="precio" placeholder="¿Cúal es el precio?">
</div>
</div>
<div class="col-xs-4 col-sm-6">
<div class="ESTILOS1lineabajacampotexto">
<select class="form-control" name="negociable">
     <option disabled selected>¿Es negociable?</option>
     <option value="si">Si</option>
     <option value="no">No</option>
 </select>
</div>
</div>
</div>

<br>
<div class="row">
<div class="col-xs-4 col-sm-6">
 <div class="ESTILOS1lineabajacampotexto">
 <input type="date" class="form-control" name="fecha1">¿Cúando se cosecho?</imput>
</div>
</div>
<div class="col-xs-4 col-sm-6">
 <div class="ESTILOS1lineabajacampotexto">
 <input type="date" class="form-control" name="fecha2">¿Cúando se vence?</imput>
</div>
</div>
</div>
<br>
<div class="row">
<div class="col-xs-4 col-sm-6">
<div class="ESTILOS1lineabajacampotexto">
<select class="form-control" name="disponibilidad">
<?php 

$consulta="SELECT * FROM `p_disponibilidad`";
$ejecutar=mysqli_query( $con,$consulta );

?>
<option >Disponibilidad</option>
<?php foreach ($ejecutar as $opciones):?>

<option value="<?php echo $opciones['Disponibilidad'] , $opciones['id_disponibilidad']?>"><?php echo $opciones['Disponibilidad'] ,  $opciones['id_disponibilidad'] ?></option>
<?php endforeach ?>
     

 </select>
</div>
</div>
<div class="col-xs-4 col-sm-6">
<div class="ESTILOS1lineabajacampotexto">
<select class="form-control" name="calidad">
<?php 

$consulta="SELECT * FROM `p_calidad_producto`";
$ejecutar=mysqli_query( $con,$consulta );

?>
<option >Calidad del producto</option>
<?php foreach ($ejecutar as $opciones):?>

<option value="<?php echo $opciones['calidad'] , $opciones['id_calidad']?>"><?php echo $opciones['calidad'] , $opciones['id_calidad']?></option>
<?php endforeach ?>

 </select>
</div>
</div>
</div>

<br>
<div class="row">
<div class="col-xs-4 col-sm-6">
<div class="ESTILOS1lineabajacampotexto">
<input type ="textbox" class="form-control" name="descripcion" placeholder="Descripcion" >
 </input>
</div>
</div>
<div class="col-xs-4 col-sm-6">
 <div class="ESTILOS1lineabajacampotexto">
 <select class="form-control" name="cosecha">
     <option disabled selected>¿Usted cosecha el producto?</option>
     <option value="si">Si</option>
     <option value="no">No</option>
 </select>
</div>

</div>

</div>

     <br>


<div class="container">
<div class="row">
      <div class="col-xs-6 col-sm-8">
          <label for=""></label>
      </div>
      <div class="col-xs-3 col-sm-2">
         <button type="button" class="ESTILOS1botones" name="cancelar"id="cancelar">ATRAS</button>
         <script type="text/javascript">
           document.getElementById("cancelar").onclick = function () {
           location.href = "regproducto.php";
           };
         </script>
        
      </div>
      <div class="col-xs-3 col-sm-2">
         <button type="submit" class="ESTILOS1botones" name="continuar"id="terminar">CONTINUAR</button>
         
      </iv>
</div>
</div>


</div>

</div>


    

 <!--  Formulario ------------col-12 col-xs-12 col-sm-12 col-lg-12-------------------------------->



    <style>


    #carac{

        position:relative;
        top: -07px;
        left: 30px;


opacity: 1;
    }

#naranja{
position:relative;
    top: -07px;
left: 10px;
width: 80px;
height: 80px;
-moz-border-radius:50px;
   -webkit-border-radius:50px;
opacity: 1;


}

    #texto{
        position:relative;
        top: 0px;
        left: 144px;

    }

  

    #hu{
        position:relative;
        left:48px;
   top:5px;
   height:20px;
   width:72px;  
   background:#;


    }

    #hc{
    position:relative;
   top:5px;
   height:20px;
   width:72px;  
   left:48px;
   background:#;
    }

    #hp{
    position:relative;
   top:5px;
   height:20px;
   width:72px;  
   left:45px;
   background:#;

    }

#rectangle{
top: 117px;
left: 0px;
width: 1200px;
height: 88px;
background: #F9F9F8 0% 0% no-repeat padding-box;
opacity: 1;}


#circulo{

   position:relative;
   top:21px;
   height:45px;
   width:45px;  
   left:100px;
   background:#84B315;
   -moz-border-radius:50px;
   -webkit-border-radius:50px;
   border:3px solid #84B315;
   
}

#circulo1{

position:relative;
top:-25px;
height:45px;
width:45px;  
left:400px;
background:#84B315;
-moz-border-radius:50px;
-webkit-border-radius:50px;
border:3px solid #84B315;

}

#circulo2{

position:relative;
top:-69px;
height:45px;
width:45px;  
left:700px;
background:#;
-moz-border-radius:50px;
-webkit-border-radius:50px;
border:3px solid #84B315;

}

    </style>

<!-- footer -------------------------------------------->

<br>

<div class="COMUNES1textofin1">
  <label for="">En caso de tener algún problema o necesitar ayuda:</label>
</div>

<br>

<div class="container">
  <div class="row">
        <div class="col-6">
          <div class="COMUNES1llamenos">
            <img src="\AGRO\imagenes\FOOTERcontactotelefono.jpg" alt="Llame al 318 7076267"><label for="">Llame al 310 246 5678    ó &nbsp</label>
          </div>
        </div>
        <div class="col-6">
          <div class="COMUNES1escribanos">
        <a href="https://api.whatsapp.com/send?phone=3187076267&text=Bienvenido%20al%20soporte%20De%20Mi%20Tierrita.%20En%20que%20podemos%20ayudarte?" target="_blank" class="COMUNES1escribanos"><label for=""><u>Escríbanos para responderle</u></label><img src="\AGRO\imagenes\FOOTERcontactochat.jpg" alt="Escríbanos para responderle">
        </div>
        </div>
    </div>
  </div>
</div>


<br><br>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
