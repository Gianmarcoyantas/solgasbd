<?php
include '../DAO/MetodosDAO.php';

$op=$_REQUEST['op'];

switch ($op) {
    case 1:
        $cod="";
        $des="";
        $pre="";
        $stock="";
        $estado="";
        $detalle="";
        break;
    case 3:
       $cod=$_REQUEST['cod'];
        $objMetodos=new MetodosDAO();
        $lista=$objMetodos->ListarProductosCod($cod);
        $cod=$lista[0];
        $des=$lista[1];
        $pre=$lista[2];
        $stock=$lista[3];
        $estado=$lista[4];
        $detalle=$lista[5];
        $op=3;
        break;
    default:
        break;
}
?>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
	<link rel="icon" type="image/png" href="https://www.solgas.com.pe/ico-solgas.png" />
	<title>Formulario | SOLGAS</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

     <!-- CSS only poner-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

</head>

<body class="animsition">
    <div class="page-wrapper">
       
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <table border="0" align="center" width="200">
                    <tr>
                 
                         <th width="90"><img src="imagenes/balon.jpg" width="60" height="60"></th>
                        <th><h5>Administrador <br> Solgas</h5></th>
                    </tr>
                </table>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                     <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a style="font-size: 20px" href="Productos.php"><img src="imagenes/producto.png" width="40">Productos</a>
                        </li>
                        <li>
                            <a style="font-size: 20px" href="Pedidos.php"><img src="imagenes/pedido.png" width="40">Pedidos</a> 
                        </li>
                       <li>
                            <a style="font-size: 20px" href="Clientes.php"><img src="imagenes/cliente.png" width="40">Clientes</a>
                        </li>
                        <li>
                            <a style="font-size: 20px" href="Cerrar.php"><img src="imagenes/salir.png" width="40">Salir</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            
                            
                            
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
  <h3 style="font-size: 30px" align="center"><b>MANTENIMIENTO DE PRODUCTO</b></h3>
 <br>
 <!--<link href="css/estilodeformulario.css" rel="stylesheet" type="text/css"/>-->
<form enctype="multipart/form-data" action="Mantenimiento.php" method="POST" >

    <center>
        <table  width="400" align="center" style="margin-top: 10px">
            <tr>
                  <tr>
                      <td style="font-size: 15px"><label for="codigo">Codigo:</label></td>
                      <td><input type="text" name="txtCod" value="<?php echo $cod; ?>"class="form-control input-sm" style="margin-top: 1px;" readonly="readonly" required="True"></td>
                  </tr>
                  
                  <tr>
                      <td style="font-size: 15px"><label for="descripcion">Descripción: </td>
                      <td><input type="text" name="txtDes" value="<?php echo $des; ?>" class="form-control input-sm" style="margin-top: 5px;" required="true" onkeypress="return SoloLetras(event);"></td>
                  </tr>
                  
                  <tr>
                      <td style="font-size: 15px"><label for="precio">Precio: </td>
                      <td><input type="text" name="txtPre" value="<?php echo $pre; ?>" class="form-control input-sm" style="margin-top: 5px;" required="true" onkeypress="return SoloNumeros(event);"></td>
                  </tr>
                  
                  <tr>
                      <td style="font-size: 15px"><label for="cantidad">Cantidad: </td>
                      <td><input type="text" name="txtCan" value="<?php echo $stock; ?>" class="form-control input-sm" style="margin-top: 5px;" required="true" onkeypress="return SoloNumeros(event);"></td>
                  </tr>
                  
                  <tr>
                      <td style="font-size: 15px"><label for="etado">Estado: </td>
                      <td><input type="text" name="selectEstado" value="<?php echo $estado; ?>" class="form-control input-sm" style="margin-top: 5px;" required="true" onkeypress="return SoloLetras(event);"></td>
                  </tr>
                  
                  <tr>
                      <td style="font-size: 15px"><label for="detalle">Detalle: </td>
                      <td><textarea name="txtDetalle" width="50" rows="3" class="form-control input-sm" style="margin-top: 5px;" required="true"><?php echo $detalle; ?></textarea>
                  </tr>
                  
                  <tr>
                      <td style="font-size: 15px" required="true"><label for="imagen" required="true">Imagen: </td>
                      <td><input name="archivo" type="file" required="true"/></td>
                  </tr>
                  <tr style="margin-top: 5px;">
                      
                  <th><input type="submit" value="Guardar"  class="btn btn-success" name="btnGuardar"/></th>
                  <input type="hidden" value="<?php echo $op;?>"  name="op"/>
                  <th><a href="Productos.php"><input class="btn btn-dark" value="Cancelar"></a>
    </table>
        </center>
</form>
            </div>
            
 <script>
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
 alert("Ingresar Solo letras");
 return false;
}
}
function SoloNumeros(e){
  key = e.keyCode || e.which;
tecla = String.fromCharCode(key).toString();
letras = "1234567890";

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
 alert("Ingresar Solo Numeros");
 return false;
}  
}
</script>
            
            
        </div>
    </div>
</body>
</html>
