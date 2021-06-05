<!DOCTYPE html>
<?php
include '../DAO/MetodosDAO.php';
session_start();
if(($_SESSION['acceso']<>true)){
    header("Location: Login.php");
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
	<title>Productos Admin | SOLGAS</title>

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
                        <li style="background-color: #ECEBEC;" class="active has-sub">
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
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        <h3 style="font-size: 30px" align="center"><b>MANTENIMIENTO DE PRODUCTOS</b></h3>
                       <a href="Formulario.php?op=1&cod=0" class="btn btn-dark" >Agregar Nuevo Producto</a>
                        <center>
                           <table class="table" border="1" align="center"  style="margin-top: 15px">

                                    
                                
                            </button>
                                <tr style="background: #444; color: white">
                                    <th style="font-size: 15px" align="center"><center>Codigo</center></th>
                                    <th style="font-size: 15px" align="center"><center>Descripción</center></th>
                                    <th style="font-size: 15px" align="center"><center>Precio</center></th>
                                    <th style="font-size: 15px" align="center"><center>Stock</center></th>
                                    <th style="font-size: 15px" align="center"><center>Estado</center></th>
                                    <th style="font-size: 15px" align="center"><center>Imagen</center></th>
                                    <th style="font-size: 15px" align="center"><center>Acción</center></th>
                                    
                                </tr>
                                <?php
                                
                                $metodos=new MetodosDAO();
                                $lista=$metodos->ListarProductos();
                                foreach ($lista as $row) {
                                    ?>
                                <tr>
                                    <td align="center"><?php echo "PRO-000-".$row[0]?></td>
                                    <td align="center"><?php echo $row[1]?></td>
                                    <td align="center"><?php echo "S./ ".$row[2]?></td>
                                    <td align="center"><?php echo $row[3]?></td>
                                    <td align="center"><?php echo $row[4]?></td>
                                    <th><center><img src="../Imagenes/<?php echo $row[6]?>" width="60" height="50"></center></th>
                                    <td align="center">
                                        <a href="Formulario.php?op=3&cod=<?php echo $row[0]?>" class="btn btn-primary" color:orange>Editar</a>
                                        <a href="Mantenimiento.php?op=2&cod=<?php echo $row[0]?>" class="btn btn-danger"  color:red>Eliminar</a>
                                    </td>
                                    <!--<th><a class="btn btn-outline-primary" style="margin-top: 3px;margin-bottom: 3px;" 
                                           href="Mantenimiento.php?op=2&cod=<?php echo $row[0]?>">Eliminar</a> 
                                        || <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" 
                                                   style="margin-top: 5px; margin-bottom: 5px;" onclick="mostrarDetalle(3,<?php echo $row[0]?>)">Editar</button></th>-->
                                
                                 
                                </tr>
                                <?php
                                }
                                ?>
                            </table>
                            
                           <!-- <h3 align="center">
                                <a href="Formulario.php?op=1&cod=0" class="btn btn-primary">Add Nuevos Productos</a>
                            </h3>-->
    <!-- Button trigger modal -->
    
                    </center>     
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    
    
    

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5  class="modal-title" id="exampleModalLabel">NUEVOS PRODUCTOS</h5>
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
    
    
  
    
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    
    
    <script type="text/javascript">

var resultado=document.getElementById("mostrar");

function mostrarDetalle(op,cod){
    //validamos navegador que estamos utilizando
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
    xmlhttp.open("GET","Formulario.php?op="+op+"&cod="+cod,true);
    xmlhttp.send();
}

</script>

</body>

</html>
<!-- end document-->

