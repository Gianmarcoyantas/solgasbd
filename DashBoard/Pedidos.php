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
        
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
	<link rel="icon" type="image/png" href="https://www.solgas.com.pe/ico-solgas.png" />
	<title>Pedidos Admin | SOLGAS</title>

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                            <a style="font-size: 20px;text-decoration-line: none" href="Productos.php"><img src="imagenes/producto.png" width="40">Productos</a>
                        </li>
                        <li style="background-color: #ECEBEC;" class="active has-sub">
                            <a style="font-size: 20px;text-decoration-line: none" href="Pedidos.php"><img src="imagenes/pedido.png" width="40">Pedidos</a> 
                        </li>
                       <li>
                            <a style="font-size: 20px;text-decoration-line: none" href="Clientes.php"><img src="imagenes/cliente.png" width="40">Clientes</a>
                        </li>
                        <li>
                            <a style="font-size: 20px;text-decoration-line: none" href="../Vista/CasillaEntrada.php"><img src="imagenes/cliente.png" width="40">Casilla Electronica</a>
                        </li>
                        <li>
                            <a style="font-size: 20px;text-decoration-line: none" href="Cerrar.php"><img src="imagenes/salir.png" width="40">Salir</a>
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
                                <h3 style="font-size: 30px" align="center"><b>PEDIDOS</b></h3>
                                <label><b>Buscar: fecha Inicio</b></label>
                                <input style="height: 36px" type="date" id="fei" name="fei">
                                <label><b>Fecha Fin:</b></label>
                                <input style="height: 36px" type="date" id="fef" name="fef">
                                <button onclick="busqueda();" class="btn btn-secondary">Buscar</button>
                                <a  class="btn btn-success" href="reporte_pedidos_excel.php">Exportar a Excel</a>
                                <a class="btn btn-danger" href="reporte_pedidos_pdf.php" download="ReportePedidos">Exportar a PDF</a>
                              <!--  <label style="font-weight: normal;">Desde: <input class="form-control" type="date" id="bd-desde"/></label>
				<label style="font-weight: normal;">Hasta: <input class="form-control" type="date" id="bd-hasta"/></label>
                                <button style="margin: 20px 0px 0px 0px"  class="btn btn-secondary" href="busca_por_fecha.php" >Buscar</button>-->
                                <br>
                                
                                
                                <center>
                                    
                                    <table class="table" border="1" width="900" align="center" style="margin-top: 10px">
                                        <thead class="thead-dark">
                                        <tr style="background: slategray;color: white">
                                        <th style="font-size: 15px" align="center"><center>Pedido</center></th>
                                        <th style="font-size: 15px" align="center"><center>Numero De Pedido</center></th>
                                        <th style="font-size: 15px" align="center"><center>Codigo Del Cliente</center></th>
                                        <th style="font-size: 15px" align="center"><center>Nombre Del Cliente</center></th>
                                        <th style="font-size: 15px" align="center"><center>Fecha Del Pedido</center></th>
                                        <th style="font-size: 15px" align="center"><center>Acción</center></th>
                                        </tr>
                                        </thead>
                                        <tbody id="pedi">
                                        <?php
                                         $metodos=new MetodosDAO();
                                         $lista=$metodos->ListarPedidos();
                                         foreach ($lista as $row) {
                                         ?>
                                         <tr>
                                         <td align="center"><button  type="button"  class="btn btn-info" onclick="mostrarDetalle(<?php echo $row[0]?>)">Ver Detalle</button></td>
                                         <td align="center"><?php echo "PED-000-".$row[0]?></td>
                                         <td align="center"><?php echo "CLI-000-".$row[1]?></td>
                                         <td align="center"><?php echo $row[2]?></td>
                                         <td align="center"><?php echo $row[3]?></td>
                                         <td align="center"><a class="btn btn-warning" onclick="imprimir('<?php echo $row[0] ?>');" >Imprimir Boleta</a></td>
                                         </tr>
                                         <?php
                                }
                                ?>                                            
                                        </tbody>
                                </table>
                                    
                                </center>
                                <div id="mostrar" style="margin: 0 auto;">
                                
                            </div>
                                <div class="copyright">
                                    <p></p>
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

    <script>
(function(){	
	$('#rango_fecha').on('click',function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = './DashBoard/busca_por_fecha.php';
              
		$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(datos){
			$('#actualizar').html(datos);
		}
	});
	return false;
	});
})();
</script>
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

function busqueda(){
var fei=document.getElementById('fei').value;
var fef=document.getElementById('fef').value;
$.ajax({
    type:"post",
    url:"buscarxfecha.php",
    data:"fei="+fei+"&fef="+fef,
    success:function(data){
         // alert(data);
         $("#pedi").html(data);
        //console.log(data);
    }

})

}
function mostrarDetalle(num){
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
    xmlhttp.open("GET","detallePedido.php?num="+num,true);
    xmlhttp.send();
}

</script>
<script type="text/javascript">
function imprimir(dato){
    window.location.href=("imprimir_boleta.php?pedido="+dato);

}
</script>

</body>

</html>
<!-- end document-->

