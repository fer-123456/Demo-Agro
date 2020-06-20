<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/AGRO-RISARALDA/Estilos/Estilos.css">
    <link href="navbar.css" rel="stylesheet">
    

    <title>Transportador Saludo</title>

  </head>
  <body>


    <!--  navbar ---------------------------------------------------------------------->

      <div class="container">
        <div class="row">
          <div class="col-2">
                  <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample09">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Productos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Vender</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Ayuda</a>
                        </li>
                        
                        <li class="nav-item">
                          <a class="nav-link" href="#">Ingresar</a>
                        </li>
                        </ul>
                      </div>
                  </nav>
          </div>
            <div class="col-8" hidden-xs-down hidden-sm-down hidden-md-down>
                      <a >Inicio</a>
                      <a href="contacto.html">Productos</a>
                      <a href="contacto.html">Vender</a>
                      <a href="contacto.html">Ayuda</a>
                      <a href="contacto.html">Ingresar</a>
                      <button class="ESTILOS1botones2" role="link" href="index1.html">Crear</button>
          </div>
        </div>
      </div>


<!--  header ---------------------------------------------------------------------->

<div class="container">
  <div class="row-12">
    <img src="\AGRO-RISARALDA\imagenes\ENCABEZADOLogo.png" alt="De mi tierrita">
  </div>
</div>

<br>
<div class="container">
  <div class="row">
    <div class="">
      <p>Apoyamos a nuestros campesinos para que reciban siempre el precio justo. ¡Un camino directo¡</p>
      <img src="\AGRO-RISARALDA\imagenes\ENCABEZADObanner.png" alt="De mi tierrita" class="img-fluid">
    </div>
  </div>
</div>

<!-- cuerpo -------------------------------------------->
<br>
<div class="container">
  <div class="row">
        <div class="col">
          <label class="ESTILOS1centrado5" for=""><b>Soy Campesino</b> <br>Quiero vender mis productos</label>
          <img src="\AGRO-RISARALDA\imagenes\ENCABEZADOvender.PNG" alt="De mi tierrita" class="img-fluid"><br><br>
          <button type="button" class="ESTILOS1botones2" name="vender" id="boton_Productor">VENDER</button>
		  <script type="text/javascript">
            document.getElementById("boton_Productor").onclick = function () {
            location.href = "P_Productor_saludo.php";
            };
         </script>
        </div>
        <div class="col">
          <label class="ESTILOS1centrado5" for=""><b>Soy Conductor</b> <br>Quiero ofrecer mi transporte</label>
          <img src="\AGRO-RISARALDA\imagenes\ENCABEZADOtransportar.PNG" alt="De mi tierrita" class="img-fluid"><br><br>
          <button type="button" class="ESTILOS1botones2" name="transportar" id="boton_Transportador">TRANSPORTAR</button>
          <script type="text/javascript">
            document.getElementById("boton_Transportador").onclick = function () {
            location.href = "T_Transportador_saludo.php";
            };
         </script>
        </div>
        <div class="col">
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
</div>

<br><br>

<div class="container">
  <div class="form-group">
        <label class="COMUNES1productostemporada" for="">Productos de Temporada</label>
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
                <img src="\AGRO-RISARALDA\imagenes\red-tomatoes-1367243.png" alt="De mi tierrita">
                  <!-- <div class="card-body"> -->
                    <label class="ESTILOS1centrado1"></label>
                    <label class="ESTILOS1centrado1">Frutas</label>
                    <label class="ESTILOS1centrado2">Apia</label>
                    <label class="ESTILOS1centrado3">Tomate</label>
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
                    <label class="ESTILOS1centrado3">Banano</label>
                    <label class="ESTILOS1centrado4">1300 Kg</label>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img src="/AGRO-RISARALDA/imagenes/276.png" alt="De mi tierrita">
                  <!-- <div class="card-body"> -->
                    <label class="ESTILOS1centrado1"></label>
                    <label class="ESTILOS1centrado1">Frutas</label>
                    <label class="ESTILOS1centrado2">Apia</label>
                    <label class="ESTILOS1centrado3">Naranja Valencia</label>
                    <label class="ESTILOS1centrado4">1300 Kg</label>
              </div>
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
                <img src="\AGRO-RISARALDA\imagenes\/Lulo-01.png" alt="De mi tierrita">
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
  </div>
</div>

<!-- footer -------------------------------------------->

<div class="container">
  <div class="row">
    <div class="">
      <p>Siempre Pensando en el hogar</p>
      <img src="\AGRO-RISARALDA\imagenes\ENCABEZADObanner1.png" alt="De mi tierrita" class="img-fluid">
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
