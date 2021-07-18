<!DOCTYPE html>
<?php
date_default_timezone_set('America/Lima');
include '../DAO/MetodosDAO.php';
session_start();
if(($_SESSION['acceso']<>true)){
    header("Location: Login.php");
}
?>
<head>
    
        <!-- Estilos-->
        <link href="css/estilos.css" rel="stylesheet">
    
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
	<link rel="icon" type="image/png" href="https://www.solgas.com.pe/ico-solgas.png" />
	<title>Lista Clientes | SOLGAS</title>
    
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    

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
                       <li style="background-color: #ECEBEC;" class="active has-sub">
                            <a style="font-size: 20px" href="Clientes.php"><img src="imagenes/cliente.png" width="40">Clientes</a>
                        </li>
                         <li>
                            <a style="font-size: 20px;text-decoration-line: none" href="../Vista/CasillaEntrada.php"><img src="imagenes/cliente.png" width="40">Casilla Electronica</a>
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
                        <div class="row">
                            <div class="col-md-12">
                               <h3 style="font-size: 30px" align="center"><b>LISTA DE CLIENTES</b></h3>
                                <!-- <button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Exportar a Excel</button> -->
                                <a class="btn btn-success" href="reporte_cliente_excel.php">Exportar a Excel</a>   
                                <a class="btn btn-danger" href="reporte_cliente_pdf.php" download="ReporteClientes">Exportar a PDF</a>  
                                <center>
                                    <table class="table" border="" width="1000" align="center" style="margin-top: 5px">
                                        <thead class="thead-dark">
                                        <tr style="background: slategray;color: white">
                                        <th style="font-size: 15px" align="center"><center>Codigo</center></th>
                                        <th style="font-size: 15px" align="center"><center>Nombre</center></th>
                                        <th style="font-size: 15px" align="center"><center>Direccion</center></th>
                                        <th style="font-size: 15px" align="center"><center>Distrito</center></th>
                                        <th style="font-size: 15px" align="center"><center>Correo</center></th>
                                        <th style="font-size: 15px" align="center"><center>Password</center></th>
                                        </tr>
                                        </thead>
                                         <?php
                                
                                $metodos=new MetodosDAO();
                                $lista=$metodos->ListarClientes();
                                foreach ($lista as $row) {
                                    ?>
                                    <tr>
                                    <td style="font-size: 13px" align="center"><?php echo "CLI-000-". $row[0]?></td>
                                    <td style="font-size: 13px" align="center"><?php echo $row[1]?></td>
                                    <td style="font-size: 13px" align="center"><?php echo $row[2]?></td>
                                    <td style="font-size: 13px" align="center"><?php echo $row[3]?></td>
                                    <td style="font-size: 13px" align="center"><?php echo $row[4]?></td>
                                    <td style="font-size: 13px" align="center"><?php echo $row[5]?></td>
                                    
                                </tr>
                                <?php
                                }
                                ?>
                                </table>
                                    
                                    </center>
                                <div id="mostrar" style="margin: 0 auto;">
                                
                            </div>
                                <div class="copyright">
                                     
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
           <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  

</body>

</html>
<!-- end document-->

