<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/AGRO-RISARALDA/Estilos/Estilos.css">
    <link rel="stylesheet" type="text/css" href="/AGRO-RISARALDA/Estilos/muneca.css">
    <link href="navbar.css" rel="stylesheet">
    

    <title>Transportador Saludo</title>

  </head>
  <body>


    <!--  navbar ---------------------------------------------------------------------->

            <div class="col-8" hidden-xs-down hidden-sm-down hidden-md-down>
                      <div style="float : right"><br>
                      <a id="color">Inicio</a>
                      <a id="color">Productos</a>
                      <a id="color">Vender</a>
                      <a href="https://api.whatsapp.com/send?phone=3187076267&text=Bienvenido%20al%20soporte%20De%20Mi%20Tierrita.%20En%20que%20podemos%20ayudarte?" id="color">Ayuda</a>
                      <a href="C_Login_Productor.php" id="color">Ingresar</a>
                      
          </div>
        </div>
      </div>
      </div>
      
      <button type="button" class="ESTILOS1botones2" id="boton_Pro" style="left : 750px; position :relative; top : 50px; height: 38px; width : 160px; font: 18px/21px Arial;">Crear cuenta</button>
<!--  header ---------------------------------------------------------------------->

<div class="container">
  <div class="row-12">
    <img src="\AGRO-RISARALDA\imagenes\ENCABEZADOLogo.png" alt="De mi tierrita">
  
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="contenedor">
    <div class="texto_encima">

      <b>Apoyamos</b> a nuestros<br> <b>campesinos</b> para que <b>reciban</b><br> siempre el <b>precio justo</b>.<br> ¡Un camino directo¡
      
    </div>
    <img src="\AGRO-RISARALDA\imagenes\ENCABEZADObanner.png" alt="De mi tierrita" class="img-fluid">
  </div>
</div>
</div>

<style>
 .texto_encima{
    position: relative;
    top: 180px;
    left: -350px;
    color:#ffffff;
    font:  24px/40px LEMON MILK;
}

.contenedor{
  position: relative;
    display: inline-block;
    text-align: center;

}
 </style> 



<!-- cuerpo -------------------------------------------->
<br>
<div class="container">
  <div class="row">
        <div class="col-md-3">
          <label class="ESTILOS1centrado5" for=""><b>Soy Campesino</b> <br>Quiero vender mis productos</label>
          <img src="\AGRO-RISARALDA\imagenes\ENCABEZADOvender.PNG" alt="De mi tierrita" class="img-fluid"><br><br>
          <button type="button" class="ESTILOS1botones2" name="vender" id="boton_Productor">VENDER</button>
		  <script type="text/javascript">
            document.getElementById("boton_Productor").onclick = function () {
            location.href = "P_Productor_saludo.php";
            };
         </script>
        </div>
        <div class="col-md-3">
          <label class="ESTILOS1centrado5" for=""><b>Soy Conductor</b> <br>Quiero ofrecer mi transporte</label>
          <img src="\AGRO-RISARALDA\imagenes\ENCABEZADOtransportar.PNG" alt="De mi tierrita" class="img-fluid"><br><br>
          <button type="button" class="ESTILOS1botones2" name="transportar" id="boton_Transportador">OFRECER</button>
          <script type="text/javascript">
            document.getElementById("boton_Transportador").onclick = function () {
            location.href = "T_Transportador_saludo.php";
            };
         </script>
        </div>
        <div class="col-md-3">
          <label class="ESTILOS1centrado5" for=""><b>Tengo una tienda</b> <br>Quiero comprar productos</label>
          <img src="\AGRO-RISARALDA\imagenes\ENCABEZADOcomprar.PNG" alt="De mi tierrita" class="img-fluid"><br><br>
          <button type="button" class="ESTILOS1botones2" name="comprar"id="boton_Comprador">COMPRAR</button>
          <script type="text/javascript">
            document.getElementById("boton_Comprador").onclick = function () {
            location.href = "C_Comprador_saludo.php";
            };
         </script>
        </div>
          
  </div>
  <div id="colombia">
  <img src="\AGRO-RISARALDA\imagenes\Grupo 133.PNG" id="niña">
  <h6 id="helo">Hola!</h6>
  <h6 id = "helo1"><br>¿Cómo puedo</h6>
  <br><h6 id= "helo2">ayudarte?</h6><br>

  <a href="" id="llamar"> Llamar  </a>

  <a href="https://api.whatsapp.com/send?phone=3187076267&text=Bienvenido%20al%20soporte%20De%20Mi%20Tierrita.%20En%20que%20podemos%20ayudarte?" target="_blank" id="escribir"> Escribir  </a>

  
        </div>

</div>




<div class="container">
  <div class="form-group">
        <label class="COMUNES1productostemporada" style="left : 450px; position :relative;"for="">Productos de Temporada</label>
  </div>
</div>

<!--  -->

<div class="album py-5 bg-light">

  <div class="container">

    <div class="row">

          
<div class="col-md-3">

  <div class="card mb-4 box-shadow">

    <img src="\AGRO-RISARALDA\imagenes\1917.png" alt="De mi tierrita">

      <!-- <div class="card-body"> -->

        <label class="ESTILOS1centrado1"></label>

        <label class="ESTILOS1centrado1">Frutas</label>

        <label class="ESTILOS1centrado2">Apia</label>

        <label class="ESTILOS1centrado3">Aguacate</label>

        <label class="ESTILOS1centrado4">1300 Kg</label>

  </div>

</div>

<div class="col-md-3">

  <div class="card mb-4 box-shadow">

<img src="\AGRO-RISARALDA\imagenes\3306.png" alt="De mi tierrita">

      <!-- <div class="card-body"> -->

        <label class="ESTILOS1centrado1"></label>

        <label class="ESTILOS1centrado1">Frutas</label>

        <label class="ESTILOS1centrado2">Apia</label>

        <label class="ESTILOS1centrado3">Bananos</label>

        <label class="ESTILOS1centrado4">1300 Kg</label>

  </div>

</div>

<div class="col-md-3">

  <div class="card mb-4 box-shadow">

    <img src="\AGRO-RISARALDA\imagenes\/naranja.jpg" style="width:253px;height:217px;" alt="De mi tierrita">

      <!-- <div class="card-body"> -->

        <label class="ESTILOS1centrado1"></label>

        <label class="ESTILOS1centrado1">Frutas</label>

        <label class="ESTILOS1centrado2">Apia</label>

        <label class="ESTILOS1centrado3">Naranja Valencia</label>

        <label class="ESTILOS1centrado4">1300 Kg</label>

  </div>

</div>

<div class="col-md-3">

  <div class="card mb-4 box-shadow">

    <img src="\AGRO-RISARALDA\imagenes\/8055.png" alt="De mi tierrita">

      <!-- <div class="card-body"> -->

        <label class="ESTILOS1centrado1"></label>

        <label class="ESTILOS1centrado1">Frutas</label>

        <label class="ESTILOS1centrado2">Apia</label>

        <label class="ESTILOS1centrado3">Fresa</label>

        <label class="ESTILOS1centrado4">1300 Kg</label>

  </div>

</div>

      

    <div class="row">

            <div class="col-md-3">

              <div class="card mb-4 box-shadow">

                <img src="\AGRO-RISARALDA\imagenes\431400-PE7ODK-56.png" alt="De mi tierrita">

                  <!-- <div class="card-body"> -->

                    <label class="ESTILOS1centrado1"></label>

                    <label class="ESTILOS1centrado1">Frutas</label>

                    <label class="ESTILOS1centrado2">Apia</label>

                    <label class="ESTILOS1centrado3">Cebolla</label>

                    <label class="ESTILOS1centrado4">1300 Kg</label>

              </div>

            </div>

            <div class="col-md-3">

              <div class="card mb-4 box-shadow">

        <img src="\AGRO-RISARALDA\imagenes\Lulo-01.png" alt="De mi tierrita">

                  <!-- <div class="card-body"> -->

                    <label class="ESTILOS1centrado1"></label>

                    <label class="ESTILOS1centrado1">Frutas</label>

                    <label class="ESTILOS1centrado2">Apia</label>

                    <label class="ESTILOS1centrado3">Lulo</label>

                    <label class="ESTILOS1centrado4">1300 Kg</label>

              </div>

            </div>

            <div class="col-md-3">

              <div class="card mb-4 box-shadow">

                <img src="\AGRO-RISARALDA\imagenes\manzana.jpg" style="width:253px;height:217px;" alt="De mi tierrita">

                  <!-- <div class="card-body"> -->

                    <label class="ESTILOS1centrado1"></label>

                    <label class="ESTILOS1centrado1">Frutas</label>

                    <label class="ESTILOS1centrado2">Apia</label>

                    <label class="ESTILOS1centrado3">Manzanas</label>

                    <label class="ESTILOS1centrado4">1300 Kg</label>

              </div>

            </div>

            <div class="col-md-3">

              <div class="card mb-4 box-shadow">

                <img src="\AGRO-RISARALDA\imagenes\Peras.jpg" style="width:253px;height:217px;"  alt="De mi tierrita">

                  <!-- <div class="card-body"> -->

                    <label class="ESTILOS1centrado1"></label>

                    <label class="ESTILOS1centrado1">Frutas</label>

                    <label class="ESTILOS1centrado2">Apia</label>

                    <label class="ESTILOS1centrado3">Peras</label>

                    <label class="ESTILOS1centrado4">1300 Kg</label>

              </div>

            </div>

  </div>

</div>

<!-- footer -------------------------------------------->

<div class="container">
  <div class="row">
    <div class="">
    <div class="contenedor">
    <div class="texto_encima">
      <p><br>SIEMPRE<br> PENSANDO<br> EN EL HOGAR</p>
      
    </div>
    <img src="\AGRO-RISARALDA\imagenes\ENCABEZADObanner1.png" alt="De mi tierrita" class="img-fluid">
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

<style>
#color{
color:#444444;
position:relative;
top: 40px;


}


  </style>
