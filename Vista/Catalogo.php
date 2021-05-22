<!DOCTYPE html>
<?php
date_default_timezone_set('America/Lima');
session_start();
$lista=$_SESSION['lista'];
?>

<html>
    <head>
        <meta charset="UTF-8">

        <!-- plantilla -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="icon" type="image/png" href="https://www.solgas.com.pe/ico-solgas.png" />
	<title>Productos | SOLGAS</title>
    
    

    <!-- Estilos-->
    <link href="../css/modern-business.css" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
 
    
    </head>
    <body>       
       
        <!-- Menu  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
         
      <div class="container">
          
          <a class="navbar-brand"  href="Catalogo.php">Distribuidora Norteña </a> 
        <!-- <a style="color:#FF0000;"> <?php echo "<font color='red'>" . "Fecha: " . date("d/m/Y") . " Hora " . date("h:i:sa"); ?> </a> -->
         <!--  <a style="color:#FF0000;"> <?php echo "<font color='white'>" . "Fecha: " . date("d/m/Y") . "<br> Hora " . date("h:i:sa"); ?> </a> -->
        
              
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
              <a class="nav-link" href="Nosotros.php">Nosotros</a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link" href="Registro.php">Registrarse</a>
            </li>-->
            <li class="nav-item">
                <a class="nav-link" href="Carrito.php">Carrito</a>
            </li>
            <?php
            if(!isset($_SESSION['acceso']) || $_SESSION['acceso']<>true){ 
            ?>
            <li class="nav-item">
              <a  class="nav-link" href="" data-toggle="modal" data-target="#modalLogin">Iniciar Sesion</a>
            </li>

           
            <?php
            }else{
                ?>
            <li class="nav-item">
                 <a  class="nav-link">Bienvenido <?php echo $_SESSION['nombre'];?></a>
            </li>
             <li class="nav-item">
                 <a href="Cerrar.php" class="nav-link">Cerrar Sesion</a>
            </li>
            
            <?php
            }
            ?>
            
          </ul>
        </div>
      </div>
    </nav>
        <!-- fin de menu -->
        
        
        <!-- banner -->
        <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
       
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('../Imagenes/banner.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3></h3>
              <p></p>
            </div>
          </div>

    </header>
        <!-- fin de banner -->
        
       
        <h2 align="center"><FONT FACE="aharoni">CATALOGO DE PRODUCTOS</FONT></h2>
        <br>
        
<h2 align="center"></h2>    
<div class="container">
<table border="0" width="1000" align="center" class="table">
    <tr align='center'>
        <!-- RECORRER VARIABLE LISTA -->
<?php
 $num=0;
   foreach ($lista as $REGISTRO){ //LA LISTA LO ALMACENO EN REGISTRO
         if($num==3){  //CADA 3 ELEMENTOS HABRA SALDO DE FILA
             echo "<tr align=center>";
             $num=1;
         }else
             $num++;
?>
        
<!-- MOSTRAR IMAGENES DE LA BD -->
 <th><img src="../Imagenes/<?php echo $REGISTRO[6]?>" width=180 height=180>
     <br>
     <h6>Producto: <?php echo $REGISTRO[1]?></h6>
     <!-- BOTON PARA AGREGAR A CARRITO -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="mostrarDetalle(<?php echo $REGISTRO[0];?>)">
  Agregar
</button></th>      
<?php
    }
?>
        </table>
</div>
<!-- Modal Detalle-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detalle de Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body" id="mostrar">
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>


<!-- Modal Login-->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLoginLabel">Login de Usuario</h5>
      </div>
         <form action="Valida.php">
         <div class="modal-body">
         
              <table border="0" align="center">
                  <tr>
                      <td>Correo: </td>
                      <td><Input style="width: 250px" class="form-control" type="email" name="txtUsu" id="txtUsu" required="true"></td>
                  </tr><tr>
                      <td>Password: </td>
                      <td><Input style="width: 250px" class="form-control" type="password" name="txtPas" id="txtPas" required="true"></td>
                  </tr>
              </table>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="submit()">Iniciar Sesion</button>
      </div>
             <h6 align="center"><a href="Registro.php">Registrarse</a></h6>
        </form>
    </div>
  </div>
</div>

<!-- ModalCON ESTE CODIGO MOSTRAMOS DETALLE DE PRODUCTO EN MODAL-->
<script type="text/javascript">

var resultado=document.getElementById("mostrar");

//FUNCION mostrarDetalle QUE RECIBE EL PARAMETRO (CODPROD)
function mostrarDetalle(cod){
    //AQUI HACEMOS USO DE AJAX
    //validamos navegador que estamos utilizando
    //VARIABLE xmlhttp
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }else{
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
        if(xmlhttp.readyState===4 && xmlhttp.status===200){
            resultado.innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","detalle.php?cod="+cod,true);
    xmlhttp.send();
}

</script>

<link href="css/estilodecatalogo.css" rel="stylesheet" type="text/css"/>
<div align="center" style="background-color:#ff8000">
    <h3 align="center">Con la seguridad de :</h3> 
  <img align="center" src="https://pngimg.com/uploads/paypal/paypal_PNG18.png " width="500" height="200/>
  <br></br>
   <br></br>
  </div>

  <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Giovanna Tanta</p>
        <p class="m-0 text-center text-white">Liliana Ramirez</p>
        <p class="m-0 text-center text-white">Geanmarco Yantas</p>
        <p class="m-0 text-center text-white">Gean Carlos Romero</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   
    
    
<style type="text/css">.redes-flotantes {
position: fixed;
right: 8px;
top: 75%;
z-index: 20;
}
.redes-flotantes img {
float: right; clear: right;
 margin: 5px;
-moz-transform: scale(.8) ;
-webkit-transform: scale(.8) ;
-o-transform: scale(.8) ;
-ms-transform: scale(.8) ;
transform: scale(.8) ;
-webkit-transition: all .2s ease-in-out;
-moz-transition: all .2s ease-in-out;
-o-transition: all .2s ease-in-out;
transition: all .2s ease-in-out;
}
.redes-flotantes img:hover {
-moz-transform: scale(1.1) rotate(6deg);
-webkit-transform: scale(1.1) rotate(6deg);
-o-transform: scale(1.1) rotate(6deg);
-ms-transform: scale(1.1) rotate(6deg);
transform: scale(1.1) rotate(6deg);
}</style>
<div class='redes-flotantes'>


<div class="separator" style="clear: both; text-align: left;">
</div>
<div class="separator" style="clear: both; text-align: center;">
</div>
<div class="separator" style="clear: both; text-align: center;">
</div>
<div class="separator" style="clear: both; text-align: left;">
<a href="http://wa.me/998453659" style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;" target="_blank"><img border="0" data-original-height="59" data-original-width="59" src="https://1.bp.blogspot.com/-q3Dot9N2qac/XOQgr9etVpI/AAAAAAABT1M/6V4Bqaqr-6UQcl9Fy2_CaVgex0N_OYuQgCLcBGAs/s1600/whatsapp%2Bicono.png" /></a></div>
<div class="separator" style="clear: both; text-align: center;">
<a href="https://www.facebook.com/SolgasMedina" style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;" target="_blank"><img border="0" data-original-height="59" data-original-width="59" src="https://3.bp.blogspot.com/-SK4W7Kmjoh8/XOQj5wjwERI/AAAAAAABT1g/2i3wxgGTwdU8v67F1rMOAe3ooWu9f2fEACLcBGAs/s1600/facebook%2Bmessenger%2Bicono.png" /></a></div></div>

    
    
    </body>
    
    
</html>
