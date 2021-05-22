<!DOCTYPE html>
<?php
date_default_timezone_set('America/Lima');
    session_start();
   include '../DAO/MetodosDAO.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="https://www.solgas.com.pe/ico-solgas.png" />
        <title>Carrito De Compras | SOLGAS</title>
        
        
        <!-- plantilla -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Modern Business - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/modern-business.css" rel="stylesheet">
        
        <!-- -->
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
        <!-- <a style="color:#FF0000;" <?php echo "<font color='red'>" . "Fecha: " . date("d/m/Y") . " Hora " . date("h:i:sa"); ?> </a>-->
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
                <li class="nav-item">
              <a class="nav-link" href="Nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link" href="registro.php">Registrarse</a>-->
            </li>
            </li> <li class="nav-item">
                <a class="nav-link" href="Catalogo.php">Catalogo</a>
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
                      <td>Usuario: </td>
                      <td><Input type="text" name="txtUsu"></td>
                  </tr><tr>
                      <td>Password: </td>
                      <td><Input type="password" name="txtPas"></td>
                  </tr>
              </table>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="submit()">Iniciar Sesion</button>
      </div>
             <h6 align="center"><a href="Registro.php">Registarse</a></h6>
        </form>
    </div>
  </div>
</div>
        
        
        <div class="container">     
        <h4 align="center">Carrito de Productos</h4>
        <table border="1" width="400" align="center" class='table'>
            <tr bgcolor="skyblue">
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Valor</th>
            </tr>
        <?php
        if(isset($_SESSION['carrito'])){
            $total=0;
        foreach($_SESSION['carrito'] as $id=>$x){
            $objMetodos=new MetodosDAO();
            $lista=$objMetodos->ListarProductosCod($id);
            $nombre=$lista[1];
            $precio=$lista[2];
            $costo=$x*$precio;
            $total=$total+$costo;
            
            ?>
            <tr>
            <td><?php echo $nombre; ?></td>
            <td><?php echo $precio; ?></td>
            <td><?php echo $x; ?>
                <a href='../DAO/CarritoDAO.php?id=<?php echo $id; 
                ?>&accion=eliminar&op=2' class="btn btn-secondary">Rebajar</a></td>
            <td><?php echo $costo; ?></td>
            </tr>
            <?php
            }
            ?>
            <tr>
            <th colspan="3">Total</td>
            <th><?php echo $total; ?></th>
            </tr>

        </table>
        <h6 align="center">
            <br><a href='../DAO/CarritoDAO.php?accion=vacio&op=2' class="btn btn-primary" 
                   style="width: 200px">Cancelar Pedido</a> 
             <a href='Catalogo.php' class="btn btn-primary" style="width: 200px">Seguir Comprando</a>
             
             <button type="button" onclick="validar()" class="btn btn-secondary" 
                     data-toggle="modal" data-target="#exampleModal" style="width: 200px">Realizar Pago</button>
 
    <?php
        }else{
          ?>
        Su carrito se encuentra vacio<p><a href='Catalogo.php'>Agregue Producto</a>
        <?php
            }
        ?>
        </h6>
        
        </div>  
     

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <script>
        function validar() {
             <?php
             if($_SESSION['acceso']==true){
             ?>
                     location.href='pago.php?total=<?php echo $total;?>&estado=pagar';
                     <?php
             }
             ?>       
        }
    </script>


    
    
    <?php
    
    if(isset($_SESSION['carrito'])){
    
    ?>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="Valida.php">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login de Usuarios</h5>
      </div>
      <div class="modal-body">
         
              <table border="0" align="center">
                  <tr>
                      <td>Usuario: </td>
                      <td><Input type="text" name="txtUsu"></td>
                  </tr><tr>
                      <td>Password: </td>
                      <td><Input type="text" name="txtPas"></td>
                  </tr>
              </table>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="submit()">Iniciar Sesion</button>
      </div>
             <h6 align="center"><a href="Registro.php">Registarse</a></h6>
        </form>
    </div>
  </div>
</div>

<?php
    }
?>
    
    
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
