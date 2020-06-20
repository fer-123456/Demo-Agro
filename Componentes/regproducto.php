
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

      
         <br>
          <div class="form-group">
              <label class="COMUNES1textobienvenida2" for="">Para publicar el producto necesitamos algunos datos<b></b></label>
          </div>
  </div>


    
       <div class="row-12">
           <div class="">
             <img src="\AGRO\imagenes\fruit.png" alt="De mi tierrita" id="fruit">
             <label id="texto">Seleccione que producto va a vender<b></b></label>
             <input  id="frutas" name="nombre" placeholder="Buscar producto">
           </div>
       </div>

  <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                       <img src="\AGRO\imagenes\1917.png" alt="De mi tierrita">
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
                       <img src="\AGRO\imagenes\red-tomatoes-1367243.png" alt="De mi tierrita">
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
                      <label class="ESTILOS1centrado3">Tomate</label>
                      <label class="ESTILOS1centrado4">1300 Kg</label>
                   </div>
               </div>
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img src="/AGRO/imagenes/276.png" alt="De mi tierrita">
                  <!-- <div class="card-body"> -->
                    <label class="ESTILOS1centrado1"></label>
                    <label class="ESTILOS1centrado1">Frutas</label>
                    <label class="ESTILOS1centrado2">Apia</label>
                    <label class="ESTILOS1centrado3">Naranja Valencia</label>
                    <label class="ESTILOS1centrado4">1300 Kg</label>
              </div>
            </div>

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
               <button type="submit" class="ESTILOS1botones" name="continuar"id="insertar">CONTINUAR</button>
               <script type="text/javascript">
                 document.getElementById("insertar").onclick = function () {
                 location.href = "formulario_producto.php";
                 };
               </script>
            </div>
    </div>
</div>
   
   
    </div>

    

 <!--  Formulario ------------col-12 col-xs-12 col-sm-12 col-lg-12-------------------------------->



    <style>

    #frutas{
        position:relative;
  top: 0px;
left: 535px;
width: 199px;
height: 27px;
background: #FBF8F8 0% 0% no-repeat padding-box;
border: 1px solid #707070;
border-radius: 6px;
opacity: 1;
    }

    #texto{
        position:relative;
        top: 0px;
        left: 144px;

    }

    #fruit{
        position:relative;
        top: 0px;
        left: 144px;
        width: 57px;
        height: 57px;
        opacity: 1;
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
background:#;
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
