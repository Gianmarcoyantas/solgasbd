<!DOCTYPE html>
<?php
date_default_timezone_set('America/Lima');
?>
<html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es-pe"> <!--<![endif]-->

<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-99995690-1"></script>

	<link rel="icon" type="image/png" href="https://www.solgas.com.pe/ico-solgas.png" />
	<title>Nosotros | SOLGAS</title>
	
                <meta charset="UTF-8">

        
        
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
 
    <!-- Menu  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
          <a class="navbar-brand"  href="Catalogo.php">Distribuidora Norteña </a> 
        <!--<a style="color:#FF0000;" <?php echo "<font color='red'>" . "Fecha: " . date("d/m/Y") . " Hora " . date("h:i:sa"); ?> </a>-->
       
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
                <li class="nav-item">
              <a class="nav-link" href="Nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registro.php">Registrarse</a>
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
                      <td><Input type="email" name="txtUsu"></td>
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
             <h6 align="center"><a href="Registro.php">Registrarse</a></h6>
        </form>
    </div>
  </div>
</div>
    </head>
    
    <body>
   
	<meta property="og:title" content="SOLGAS - Marca líder de gas (GLP) en el Perú." />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="SOLGAS - 72 años distribuyendo gas a todos los hogares y negocios del Perú." />
	<meta property="og:site_name" content="SOLGAS" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="url absoluta de imagen a compartir" />
	
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="https://www.solgas.com.pe/wp-content/themes/Tema_solgas/css/fonts.css?v5">
	<link rel="stylesheet" href="https://www.solgas.com.pe/wp-content/themes/Tema_solgas/css/normalize.css?v10">
	<link rel="stylesheet" href="https://www.solgas.com.pe/wp-content/themes/Tema_solgas/css/animate.css?v10">
	<script src="https://use.fontawesome.com/c8f7bfdac2.js?v2"></script>
	<link rel="stylesheet" href="https://www.solgas.com.pe/wp-content/themes/Tema_solgas/css/header-footer.css?v25">
	<link rel="stylesheet" href="https://www.solgas.com.pe/wp-content/themes/Tema_solgas/css/terminos_legales.css?v20">
	<link rel="stylesheet" href="https://www.solgas.com.pe/wp-content/themes/Tema_solgas/css/style_general.css?v20">
	<link rel="stylesheet" href="https://www.solgas.com.pe/wp-content/themes/Tema_solgas/css/nosotros_v2.css?v85">
	<link rel="stylesheet" href="https://www.solgas.com.pe/wp-content/themes/Tema_solgas/css/responsive.css?v35">


<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>

	 <div id="nosotros_v2">
		<section id="banner" style="background-image: url('https://www.solgas.com.pe/wp-content/uploads/2019/10/Carrusel_v2.jpg');">
			<div class="conte-grid">
				<div class="title_banner">
					<!-- <h3>SOMOS SOLGAS</h3> -->
					<h3>SOMOS SOLGAS</h3>
				</div>	
			</div>
		</section>
		
				<section id="familia" style="background-image: url('https://www.solgas.com.pe/wp-content/uploads/2019/11/nosotros.jpg');">
		
			<div class="conte-grid">
				<div class="cuadro_familia">
					<!-- <h3>Somos la marca peruana de Gas Licuado de toda la vida</h3> -->
					<h3>SOMOS LA MARCA PERUANA DE GAS LICUADO DE TODA LA VIDA</h3>
					<hr>
					<div class="text_familia">
						<!-- <p>Más de 72 años liderando el mercado peruano, llevando energía a todos los hogares y negocios del Perú, ayudándolos a seguir avanzando siempre.</p>
						<p>Impulsamos el desarrollo del país, siendo una fuente de energía limpia que fomenta la creatividad, el emprendimiento y el bienestar general de todos los peruanos.</p> -->
						<p>Más de 72 años liderando el mercado peruano, llevando energía a todos los hogares y negocios del Perú, ayudándolos a seguir avanzando siempre.</p>
<p>Impulsamos el desarrollo del país, siendo una fuente de energía limpia que fomenta la creatividad, el emprendimiento y el bienestar general de todos los peruanos.</p>
					</div>
				</div>	
			</div>
			
		</section>
		<section id="balones" style="background-image: url('https://www.solgas.com.pe/wp-content/uploads/2018/10/balonesv2.jpg');">
			<div class="conte-grid">
				<div class="cuadro_balones">
					<div class="text_balones">
						<!-- <p>Desde que iniciamos nuestras operaciones hace mas de 72 años nos comprometimos a hacer las cosas bien, con formalidad, responsabilidad y transparencia.</p> -->
						<p>Desde que iniciamos nuestras operaciones hace más de 72 años nos comprometimos a hacer las cosas bien, con formalidad, responsabilidad y transparencia.</p>
					</div>
					<!-- <h3>Por eso, hoy somos la marca de Gas Liquado más sólida y confiable del mercado.</h3> -->
					<h3>POR ESO, HOY SOMOS LA MARCA DE GAS LICUADO MÁS SÓLIDA Y CONFIABLE DEL MERCADO.</h3>
				</div>	
			</div>
			

		</section>

		<!-- <section id="como" style="background: radial-gradient(circle at 52% 55%, #2d4dad, #0b2265);"> -->
		<section id="como" style="background-image: url(https://www.solgas.com.pe/wp-content/uploads/2018/10/group-13@2x-min.jpg)">
			<div class="grid-image">
				<div class="img_como">
					<img src="https://www.solgas.com.pe/wp-content/themes/Tema_solgas/img/nosotros_v2/como-lo-hacemos.png">
				</div>
			</div>
			<div class="conte-grid">
				<div class="cuadro_como">
					<div>
						<h3>¿CÓMO lo <br><span>hacemos?</span></h3>
						<div class="text_como">
							<p>Contamos con infraestructura de clase mundial que incluye un <b>terminal portuario de abastecimiento con 2 esferas de almacenamiento y 8 plantas de envasado</b> localizadas estratégicamente en las principales ciudades del país, lo que nos permite llevar energía de manera segura y oportuna a las 3 regiones del Perú.</p>
							<p>Además contamos con <b>160 camiones cisterna</b> que garantizan el abastecimiento puntual y oportuno a los negocios que confían en nosotros y a <b>55,000 hogares al día a nivel nacional.</b></p>
							<p>CON SEGURIDAD, GARANTÍA, EFICIENCIA Y TRANSPARENCIA, LLEGAMOS A DONDE NOS NECESITEN PARA AYUDARLOS A ALCANZAR SUS OBJETIVOS.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="pro" class="conte-grid">
			<div class="img_solgaspro" style="background-image: url(https://www.solgas.com.pe/wp-content/uploads/2018/10/solgaspro-min.jpg)">
				<!-- <img src="https://www.solgas.com.pe/wp-content/themes/Tema_solgas/img/nosotros_v2/solgaspro.png"> -->
				<!-- <img src="https://www.solgas.com.pe/wp-content/uploads/2018/10/solgaspro-min.jpg"> -->
				<div class="cuadro_img_pro">
					<div class="img_pro_text">
						<!-- <h3>SOLGAS PRO</h3> -->
						<h3>SOLGAS <span>PRO</span></h3>
						<div>
							<!-- <p>Es nuestra marca enfocada en brindar soluciones energéticas para negocios de todo rubro y tamaño. Nuestra <b>gran cobertura a nivel nacional nos permite llegar a nuestros clientes de manera oportuna y segura</b>, asegurando que cada negocio que confía en nosotros asegure continuidad y alcance sus objetivos.</p> -->
							<p>Es nuestra marca enfocada en brindar soluciones energéticas para negocios de todo rubro y tamaño. Nuestra <b>gran cobertura a nivel nacional nos permite llegar a nuestros clientes de manera oportuna y segura</b>, garantizando que cada negocio que confía en nosotros obtenga continuidad y pueda alcanzar sus objetivos.</p>
						</div>	
					</div>
				</div>
			</div>
			<div class="cuadro_pro mision">
				<div class="ico_pro">
					<img src="https://www.solgas.com.pe/wp-content/uploads/2018/10/shape.png">
				</div>
				<!-- <h3>Misión</h3> -->
				<h3>Misión</h3>
				<div class="text_cuadro_pro">
					<!-- <p>Ser los mejores en gas licuado y otras energías limpias, preferidos por cada vez más personas en todos los territorios donde operemos.</p> -->
					<p>Somos un equipo apasionado que, en conjunto con una red de distribución, trabajamos para entregar un servicio innovador, seguro y de excelencia, que facilita y mejora la vida de nuestros clientes.</p>
				</div>
			</div>

			<div class="cuadro_pro vision">
				<div class="ico_pro">
					<img src="https://www.solgas.com.pe/wp-content/uploads/2018/10/best-seller.png">
				</div>
				<!-- <h3>Visión</h3> -->
				<h3>Visión</h3>
				<div class="text_cuadro_pro">
					<!-- <p>Somos un equipo apasionado que, en conjunto con una red de distribución, trabajamos para entregar un servicio innovador, seguro y de excelencia, que facilita y mejora la vida de nuestros clientes.</p> -->
					<p>Ser los mejores en gas licuado y otras energías limpias, preferidos por cada vez más personas en todos los territorios donde operemos.</p>
				</div>
			</div>
		</section>
		<section id="valores" style="background-image: url(https://www.solgas.com.pe/wp-content/themes/Tema_solgas/img/nosotros_v2/nuestros-valores.jpg)">
			<div class="conte-grid">
				<h3>NUESTROS<br><span>VALORES</span></h3>

				<div class="list_valor">
					<div class="item_valor">
						<div class="title_valor">
							<h2>01</h2>
							<div>
								<h3>Seguridad</h3>
							</div>
						</div>
						<div class="text-valor">
							<p>Buscamos poner siempre la persona al centro y ponemos toda nuestra energía para garantizar su integridad física, psicológica, su bienestar y sus anhelos de alcanzar la felicidad</p>
						</div>
					</div>
					
					<div class="item_valor">
						<div class="title_valor">
							<h2>02</h2>
							<div>
								<h3>Pasión por mis Clientes / Servicio</h3>
							</div>
						</div>
						<div class="text-valor">
							<p>Hacemos visible la fuerza interna y el entusiasmo que nos moviliza para ir siempre más lejos viviendo el servicio como un elemento fundamental y esencial de nuestra relación con los clientes.</p>
						</div>
					</div>
					
					<div class="item_valor">
						<div class="title_valor">
							<h2>03</h2>
							<div>
								<h3>Hacer las <br>cosas bien </h3>
							</div>
						</div>
						<div class="text-valor">
							<p>Trabajamos incansablemente y nos exigimos siempre buscando ir más lejos para cumplir nuestros compromisos de calidad, seguridad y plazos que determinan nuestros estándares y protocolos buscando no conformarnos nunca con las metas y desafíos ya alcanzados.</p>
						</div>
					</div>
					
					<div class="item_valor">
						<div class="title_valor">
							<h2>04</h2>
							<div>
								<h3>EQUIPO</h3>
							</div>
						</div>
						<div class="text-valor">
							<p>Fomentamos la colaboración como fuente de creación de valor donde el trabajo conjunto nos permite y facilita hacer las cosas bien y llegar más lejos.</p>
						</div>
					</div>
				</div>	
			</div>
			
			
		</section>
		<section id="evolucion" style="background-image: url(https://www.solgas.com.pe/wp-content/themes/Tema_solgas/img/nosotros_v2/nuestra-evolucion.jpg);">
			<div  class="conte-grid">
				<h3>NUESTRA <br><span>EVOLUCIÓN</span></h3>
				<div class="lineaTiempo">
					<a class="flechaIzq" href="#" data-direccion="1"></a>
					<div class="annos">
						<div class="item">
							<a href="#" data-item="0">
								<figure>
									<div>
										<img src="https://www.solgas.com.pe/wp-content/uploads/2018/01/Sin-título-2.jpg">
									</div>
								</figure>
								<div>1946</div>
							</a>
						</div>

						
						<div class="item">
							<a href="#" data-item="1">
								<figure>
									<div>
										<img src="https://www.solgas.com.pe/wp-content/uploads/2018/01/Sin-título-3.jpg">
									</div>
								</figure>
								<div>1969</div>
							</a>
						</div>

						
						<div class="item">
							<a href="#" data-item="2">
								<figure>
									<div>
										<img src="https://www.solgas.com.pe/wp-content/uploads/2018/01/SOLGAS-ISOTIPO-1.jpg">
									</div>
								</figure>
								<div>1992</div>
							</a>
						</div>

						
						<div class="item">
							<a href="#" data-item="3">
								<figure>
									<div>
										<img src="https://www.solgas.com.pe/wp-content/uploads/2018/01/Repsolgas.jpg">
									</div>
								</figure>
								<div>1996</div>
							</a>
						</div>

						
						<div class="item">
							<a href="#" data-item="4">
								<figure>
									<div>
										<img src="https://www.solgas.com.pe/wp-content/uploads/2018/01/LOGO-SOLGAS-RGB-1.jpg">
									</div>
								</figure>
								<div>2016</div>
							</a>
						</div>

						<div class="item">
							<a href="#" data-item="5">
								<figure>
									<div>
										<img src="https://www.solgas.com.pe/wp-content/uploads/2018/01/logo-solgas-pro-11.jpg">
									</div>
								</figure>
								<div>2017</div>
							</a>
						</div>
						<div class="item">
							<a href="#" data-item="6">
								<figure>
									<div>
										<img src="https://www.solgas.com.pe/wp-content/uploads/2018/01/logo-solgas_2.jpg">
									</div>
								</figure>
								<div>Actualidad</div>
							</a>
						</div>
					</div>
					<a class="flechaDer" href="#" data-direccion="-1"></a>
				</div>
				<div class="texto"></div>
			</div>
		</section>
	</div>
		
		<div class="new_footer">
		<div class="cont-new_footer">
			<h3>ENLACES DE INTERÉS</h3>
			<ul>
				
				<li><a href="https://www.solgas.com.pe/trabaja-con-nosotros/">Trabaja con nosotros</a></li>
				<li><a href="https://www.solgas.com.pe/registrar-distribuidor/">¿Quieres ser distribuidor Solgas?</a></li>
				<li><a href="https://www.solgas.com.pe/contactenos/">Contáctenos</a></li>
				
				<li><a href="" class="uso_web-abrir">Condiciones de Uso de Página Web</a></li>
				<li><a href="" class="politica_priv-abrir">Política de Privacidad y Protección de Datos Personales</a></li>
				<!--<li><a href="https://www.solgas.com.pe/reclamaciones/">Libro de Reclamaciones</a></li>-->
			</ul>
		</div>
		
	</div>
<div class="fonfo-pop"></div>

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
