
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/AGRO-RISARALDA/Estilos/Estilos.css">

    <title>Transportador Saludo</title>

  </head>
  <body>


    <!--  header ---------------------------------------------------------------------->


<div class="container">
  <br>
  <div class="row-12">
    <div class="">
      <img src="\AGRO-RISARALDA\imagenes\ENCABEZADOLogo.png" alt="De mi tierrita">
    </div>
  </div>
</div>

<div class="container">
  <div class="form-group">
        <br>
        <hr style="COMUNES1separadorinicio">
  </div>
</div>

<br>

<div class="container center">
    <div class="row">
        <label class="COMUNES1textobienvenida4" for="">De Mi Tierrita lo saludo, escoja una de las opciones para continuar:</label>
      </div>
</div>


<!-- cuerpo -------------------------------------------->

 <br>
  <div class="container">
    <div class="row">
          <div class="col-xs-2 col-sm-6 col-md-6" >
          <button type="button" class="ESTILOS2botones9" name="yatengocuenta"id="boton_login_productor">YA TENGO CUENTA</button>
              <script type="text/javascript">
            document.getElementById("boton_login_productor").onclick = function () {
            location.href = "C_Login_productor.php";
            };
         </script>
          </div>
          <div class="col-xs-2 col-sm-6 col-md-6">
              <button type="button" class="ESTILOS2botones8" name="quierocrearcuenta"id="registro_transportistas">QUIERO CREAR UNA CUENTA Y COMENZAR</button>
              <script type="text/javascript">
            document.getElementById("registro_transportistas").onclick = function () {
            location.href = "P_Registro_Transportista.php";
            };
         </script>
              
          </div>
    </div>
  </div>


<!-- footer -------------------------------------------->

<br><br>

<div class="COMUNES1textofin1">
  <label for="">En caso de tener algún problema o necesitar ayuda:</label>
</div>

<br>

  <div class="container">
    <div class="row">
          <div class="col-6">
            <div class="COMUNES1llamenos">
              <img src="\PRUEBAS\imagenes\FOOTERcontactotelefono.jpg" alt="Llame al 318 7076267"><label for="">Llame al 310 246 5678    ó &nbsp</label>
            </div>
          </div>
          <div class="col-6">
            <div class="COMUNES1escribanos">
          <a href="https://api.whatsapp.com/send?phone=3187076267&text=Bienvenido%20al%20soporte%20De%20Mi%20Tierrita.%20En%20que%20podemos%20ayudarte?" target="_blank" class="COMUNES1escribanos"><label for=""><u>Escríbanos para responderle</u></label><img src="\PRUEBAS\imagenes\FOOTERcontactochat.jpg" alt="Escríbanos para responderle">
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
