<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/AGRO/Estilos/Estilos.css">

    <title>Registro Productor</title>

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

<div class="container">
  <br>
      <div class="form-group">
        <label class="COMUNES1textobienvenida1" for=""><b>Para vender necesita una cuenta</b></label><br>
        <label class="COMUNES1textobienvenida2" for="">Recuerde que el número de celular y la clave personal tendrá que escribirlas cada vez
        que quiera ingresar por eso elija unas que pueda <b>recordar fácilmente</b></label>
      </div>
</div>

    <!--  Formulario ------------col-12 col-xs-12 col-sm-12 col-lg-12-------------------------------->

<br>
<form class="" action="p_registro_pro.php" method="post">
  <div class="container">

 <div class="row">
      <div class="col-xs-4 col-sm-6">
        <div class="ESTILOS1lineabajacampotexto">
          <input class="form-control" type="text" name="nombre" placeholder="Nombre">
        </div>
      </div>
      <div class="col-xs-4 col-sm-6">
        <div class="ESTILOS1lineabajacampotexto">
      <input class="form-control" type="text" name="apellido" placeholder="Apellido">
      </div>
    </div>
</div>

  <br>

  <div class="row">
     <div class="col-xs-4 col-sm-6">
       <div class="ESTILOS1lineabajacampotexto">
       <input class="form-control"  type="text" name="numcelular" placeholder="Número celular">
     </div>
     </div>
     <div class="col-xs-4 col-sm-6">
       <div class="ESTILOS1lineabajacampotexto">
       <input class="form-control" type="text" name="cedula" placeholder="Numero de cedula">
     </div>
     </div>
  </div>
  <br>
  <div class="row">
    <div class="col-xs-4 col-sm-6">
      <div class="ESTILOS1lineabajacampotexto">
      <input class="form-control"  type="password" name="password" placeholder="Contraseña">
    </div>
    </div>
    <div class="col-xs-4 col-sm-6">
      <div class="ESTILOS1lineabajacampotexto">
      <input class="form-control" type="password" name="conpassword" placeholder="Confirmar Contraseña">
      
    </div>
      </div>
  </div>
  <br>

  
<div class="row">
      <div class="col-xs-4 col-sm-6">
        <div class="ESTILOS1lineabajacampotexto">
        <select  class="form-control" name="departamento">
         <?php 

         include("conexion.php");
         $con=conectar();

         $consulta="SELECT * FROM `p_departamentos`";
         $ejecutar=mysqli_query( $con,$consulta );

?>
<option >Selecion Departamento</option>
<?php foreach ($ejecutar as $opciones):?>
   
      <option value="<?php echo $opciones['departamento']  ?>"><?php echo $opciones['departamento'] ?></option>
         <?php endforeach ?>
</select>
</select>
      </div>
      </div>
      <div class="col-xs-4 col-sm-6">
        <div class="ESTILOS1lineabajacampotexto">
        <select class="form-control" name="ciudad" placeholder>
        
         <?php 

         $consulta="SELECT * FROM `p_ciudades`";
         $ejecutar=mysqli_query( $con,$consulta );

?>
<option >Selecione Ciudad</option>
<?php foreach ($ejecutar as $opciones):?>
   
      <option value="<?php echo $opciones['ciudad']," -- " , $opciones['id_ciudad']?>"> <?php echo $opciones['ciudad'] , $opciones['id_ciudad'] ?></option>
      
      


         <?php endforeach ?>
</select>

        </select>
      </div>
      </div>
  </div>
  <br>
  <div class="row">
      <div class="col-xs-4 col-sm-6">
        <div class="ESTILOS1lineabajacampotexto">
        <input class="form-control" type="text" name="nomfinca" placeholder="Nombre de la finca">

        </select>
      </div>
      </div>

      <div class="col-xs-4 col-sm-6">
        <div class="ESTILOS1lineabajacampotexto">
        <select class="form-control" name="vereda" placeholder>

           <?php 

         $consulta="SELECT * FROM `p_veredas`";
         $ejecutar=mysqli_query( $con,$consulta );

?>
<option >Selecione Vereda</option>
<?php foreach ($ejecutar as $opciones):?>
   
      <option value="<?php echo $opciones['vereda'] ,  $opciones['id_vereda'] ?>"><?php echo $opciones['vereda'] , $opciones['id_vereda'] ?></option>
         <?php endforeach ?>
</select>
          
        </select>
      </div>
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
              <button type="button" class="ESTILOS1botones" name="cancelar"id="cancelar_productor">CANCELAR</button>
              <script type="text/javascript">
            document.getElementById("cancelar_productor").onclick = function () {
            location.href = "inicio.php";
            };
            </script>
              
          </div>
          <div class="col-xs-3 col-sm-2">
              <button type="submit" class="ESTILOS1botones" name="continuar">CREAR</button>
              <script type="text/javascript">
            document.getElementById("continuar").onclick = function () {
            location.href = "formulario_producto.php";
            };
            </script>
          </div>
    </div>
  </div>
  </form>

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
