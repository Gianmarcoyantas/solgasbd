<!DOCTYPE html>
<?php
date_default_timezone_set('America/Lima');
include '../DAO/MetodosDAO.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- plantilla -->
        <link rel="icon" type="image/png" href="https://www.solgas.com.pe/ico-solgas.png" />
        <title>Registro De Usuario | SOLGAS</title>

     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
 
    <!-- Estilos-->
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="css/estilosderegistro.css" rel="stylesheet" type="text/css"/>
    
        <!-- Menu  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="">Distribuidora Norteña</a>
        <!--<a style="color:#FF0000;" <?php echo "<font color='red'>" . "Fecha: " . date("d/m/Y") . " Hora " . date("h:i:sa"); ?>> </a> -->
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
                <li class="nav-item">
              <a class="nav-link" href="Nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="catalogo.php">Catalogo</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
        <!-- fin de menu -->
    </head>
         
    <body>
        <br>
        
        
        <form style="background-color: white;margin-top: 7%" action="" method="get">
            <h5 align="center" >Registro de Usuarios</h5>
            <hr>
            <table width="300" align="center">
                <tr>
                    <td>Nombre: </td>
                    <td><input style="width: 250px" placeholder="Ingrese su Nombre Completo" class="form-control" type="text" name="txtNom" id="txtNom"  onkeypress="return SoloLetras(event);" required="true"></td>       
                </tr>
                  <tr>
                    <td>Direccion: </td>
                    <td><input class="form-control" placeholder="Ingrese su Direccion" type="text" name="txtdir" required="true"></td>
                </tr>
                  <tr>
                    <td>Distrito: </td>
                    <td><input class="form-control" placeholder="Ingrese su Distrito" type="text" name="txtdis" required="true" onkeypress="return SoloLetras(event);"></td>
                </tr>
                <tr>
                    <td>Correo: </td>
                    <td><input class="form-control" placeholder="Ingrese su Correo" type="email" name="txtCor" required="true"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input class="form-control" placeholder="Ingrese su Contraseña" type="password" name="txtPas" required="true"></td>
                </tr>
                <tr>
                    <td  colspan="2"><div style="margin-left: 50px" class="form-check">
                        <input onclick="vali();" type="checkbox" class="form-check-input" name="check1" id="check1" value="SI">
                    <label class="form-check-label" for="exampleCheck1">
                        <a style="text-decoration-line: none" href="#">(*) He leído y aceptado la política de privacidad de Solgas</a></label>
  </div>            </td>
                </tr>  
                <br>
            </table>
                <hr>
                <tr>
                    <th colspan="2" ><input class="btn btn-success" type="submit" id="envios" hidden="true"  value="Registrar" name="btnRegistrar"></th>     
                    <th colspan="2" ><a href="Catalogo.php"><input class="btn btn-danger" type="button" value="Cancelar"></a></th>   
                </tr>
        </form>
      


        <?php
        
         if(isset($_REQUEST['btnRegistrar'])){
            $nom=$_REQUEST['txtNom'];
            $dir=$_REQUEST['txtdir'];
            $dis=$_REQUEST['txtdis'];
            $cor=$_REQUEST['txtCor'];
            $pas=$_REQUEST['txtPas'];
            $check=$_REQUEST['check1'];
            
        $objCli=new Cliente(0, $nom, $dir, $dis, $cor, $pas, $check);
            
            $Metodos=new MetodosDAO();
            $i=$Metodos->RegistrarCliente($objCli);
            
        if($i==1){
        echo "<script>alert('Usuario Registrado Correctamente');window.location.href='Catalogo.php';</script>";
        }else{
            echo"<script>alert('Error Al Registrarse ');</script>";
        }
        
        }
        ?>
                   
<script>
    function vali(){
        var val=document.getElementById("check1");
        if(val.checked==true){
            var btn=document.getElementById("envios").hidden=false;
        }
        if (val.checked==false){
            var btn=document.getElementById("envios").hidden=true;
        }
    }
function SoloLetras(e)
{
key = e.keyCode || e.which;
tecla = String.fromCharCode(key).toString();
letras = "ABCDEFGHIJKLMNOPQRSTUVWXYZÁÉÍÓÚabcdefghijklmnopqrstuvwxyzáéíóú ";

especiales = [8,13];
tecla_especial = false
for(var i in especiales) {
if(key == especiales[i]){
 tecla_especial = true;
 break;
}
}

if(letras.indexOf(tecla) == -1 && !tecla_especial)
{
 alert("Ingresar solo letras");
 return false;
}
}
</script>
    
    
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
<a href="http://wa.me/984760621" style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;" target="_blank"><img border="0" data-original-height="59" data-original-width="59" src="https://1.bp.blogspot.com/-q3Dot9N2qac/XOQgr9etVpI/AAAAAAABT1M/6V4Bqaqr-6UQcl9Fy2_CaVgex0N_OYuQgCLcBGAs/s1600/whatsapp%2Bicono.png" /></a></div>
<div class="separator" style="clear: both; text-align: center;">
<a href="https://www.facebook.com/SolgasMedina" style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;" target="_blank"><img border="0" data-original-height="59" data-original-width="59" src="https://3.bp.blogspot.com/-SK4W7Kmjoh8/XOQj5wjwERI/AAAAAAABT1g/2i3wxgGTwdU8v67F1rMOAe3ooWu9f2fEACLcBGAs/s1600/facebook%2Bmessenger%2Bicono.png" /></a></div></div>

  
    </body>
</html>
