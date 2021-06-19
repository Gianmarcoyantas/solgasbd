<?php
date_default_timezone_set('America/Lima');
include '../DAO/MetodosDAO.php';
use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;
           require 'PHPMailer/Exception.php';
           require 'PHPMailer/PHPMailer.php';
           require 'PHPMailer/SMTP.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Libro de reclamaciones
    </title>
    <!-- CSS only -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Fjalla+One&family=Heebo:wght@100&family=Hind+Madurai:wght@300&family=Roboto+Condensed:wght@300&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body style="background-color: #E0E0E0">
<!--     @if(session('success'))
        <div style="position:absolute; z-index:2;left:45em; top:-25px; opacity:0.9;margin-top: 10%" class="alert alert-success">
         <a style="font-size: 20px;font-weight: bold"> {{session('success')}}</a>
        </div>
        @endif -->
        <script type="text/javascript">
          window.setTimeout(function(){
            $(".alert").fadeTo(3500, 0).slideDown(3000, function(){
              $(this).remove();
            });
          },3000);
        </script>
    <center>
<!--             @if(count($errors)>0)
    <div style="position:absolute; z-index:2;left:20em; top:-25px; opacity:0.9;margin-top: 10%" class="alert alert-danger">
      <ul>
        <a href="#" style="color: black">ALERTA</a>
        @foreach($errors->all() as $error)
        <li style="color: black">{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif -->
     <div class="container">
          <form style="background: white;width: 800px" action="" method="GET">
     <!--    @csrf -->
        <div class="">
            <div class="row">
                <div class="col-md-4">
                    <img style="width: 40%" src="http://solgasdelivery.pe/wp-content/uploads/2019/03/balon.png">
                </div>
                <div class="col-md-8">
                    <br>
                    <p style="font-family: 'Roboto Condensed', sans-serif;font-weight: bold;font-size: 25px">Libro de Reclamaciones</p></div>
            </div>
        </div>
        <div class="row">
            <div  style="background: #EC8D00;width:350px;-webkit-box-shadow: 9px 6px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 9px 6px 5px 0px rgba(0,0,0,0.75);
box-shadow: 9px 6px 5px 0px rgba(0,0,0,0.75);">
                <a style="color: white" >(1) Seleccione la opción que desea realizar</a>
            </div>
            <div class="col-md-12">
                <br>
                <label style="margin-left: -600px;font-family: 'Roboto Condensed', sans-serif;font-weight: bold">Tipo de Comunicación</label>
            <table style="margin-left: -600px">
                <tr>
                    <td><input type="radio" name="" value="3" checked="true" readonly=""></td>
                    <td><label style="font-family:'Roboto Condensed', sans-serif ">Reclamo/Queja </label>&nbsp;&nbsp; </td>

                </tr>
            </table>  
             <label style="margin-left: -640px;font-family: 'Roboto Condensed', sans-serif;font-weight: bold">Área Destino</label>
            <select style="font-family: 'Roboto Condensed', sans-serif;width: 92%" id="area" name="area" class="form-select" aria-label="Default select example" >
                <option value="">Seleccione un area</option>
                <option value="Gerencia General">Gerencia General</option>
                <option value="Administración">Administración</option>
                <option value="Mantenimiento">Mantenimiento</option>
                <option value="Reparto">Reparto</option>
            </select>
            <br>            
            </div>                                    
        </div>
        <div class="row">
            <div style="background: #EC8D00;width:350px;-webkit-box-shadow: 9px 6px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 9px 6px 5px 0px rgba(0,0,0,0.75);
box-shadow: 9px 6px 5px 0px rgba(0,0,0,0.75);">
                <a style="color: white" >(2) Identificación del Usuario</a>
            </div>
            <div class="container">
                <div  class="col-md-12">
                <br>
                <label style="margin-left: -640px;font-family: 'Roboto Condensed', sans-serif;font-weight: bold">Tipo de Usuario</label>
            <select style="font-family: 'Roboto Condensed', sans-serif;width: 92%" id="tipo_persona" name="tipo_persona" class="form-select" aria-label="Default select example" onchange="validar();">
                <option value="0">SELECCIONE EL TIPO DE USUARIO</option>
                <option value="1">Natural</option>
                <option value="2">Juridica</option>
            </select>
            </div>
            </div>
                                                
        </div>
        <div id="pnatural">
        <div class="row">
            <div class="col-md-12">
                <label style="margin-left: -670px;font-family: 'Roboto Condensed', sans-serif;font-weight: bold">Nombres</label>
                <input style="font-family: 'Roboto Condensed', sans-serif;width: 92%" type="text" class="form-control" name="nombres" placeholder="INGRESE NOMBRES" onkeypress="return SoloLetras(event);" value="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label style="margin-left: -220px;font-family: 'Roboto Condensed', sans-serif;font-weight: bold">Apellido Paterno</label>
                <input style="font-family: 'Roboto Condensed', sans-serif;width: 84%" type="text" class="form-control" name="apellidop" placeholder="INGRESE APELLIDO PATERNO" onkeypress="return SoloLetras(event);" value="">
            </div>
            <div class="col-md-6">
                <label style="margin-left: -220px;font-family: 'Roboto Condensed', sans-serif;font-weight: bold">Apellido Materno</label>
                <input style="font-family: 'Roboto Condensed', sans-serif;width: 84%" type="text" class="form-control" name="apellidom" placeholder="INGRESE APELLIDO MATERNO" onkeypress="return SoloLetras(event);" value="">
            </div>
        </div>            
        </div>
        <div id="pjuridica" hidden="true">
            <div class="row">
                <div class="col-md-12">
                    <label style="margin-left: -650px;font-family: 'Roboto Condensed', sans-serif;font-weight: bold">Razon Socialllllllllllll</label>
                    <input style="font-family: 'Roboto Condensed', sans-serif;width:92%" class="form-control" type="text" name="razon_social" placeholder="Razon Social" value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label style="margin-left: -610PX;font-family: 'Roboto Condensed', sans-serif;font-weight: bold">Tipo de Documento</label>
            <select style="font-family: 'Roboto Condensed', sans-serif;width: 92%" class="form-select" aria-label="Default select example" name="tipo_odcumento" id="tipo_documento" onkeypress="return SoloNumeros(event);">
                <option value="0">SELECCIONE</option>
                <option value="1">DNI</option>
                <option value="2">CE</option>
                <option value="3">RUC</option>
            </select>
            </div>                        
        </div>
        
        
        
        <div class="row">
            <div class="col-md-6"><label style="margin-left: -220px;font-family: 'Roboto Condensed', sans-serif;font-weight: bold">N° Documento</label><input style="font-family: 'Roboto Condensed', sans-serif;width: 82%" type="text" class="form-control" name="ndocumento" placeholder="INGRESE NUMERO DE DOCUMENTO" onkeypress="return SoloNumeros(event);" value=""></div>
            <div class="col-md-6"><label style="margin-left: -220px;font-family: 'Roboto Condensed', sans-serif;font-weight: bold">Telefono Casa</label><input style="font-family: 'Roboto Condensed', sans-serif;width: 82%" type="text" class="form-control" name="telefono" placeholder="INGRESE TELEFONO DE CASA" onkeypress="return SoloNumeros(event);" value=""></div>
        </div>
        <div class="row">
            <div class="">
                <label style="margin-left: -680px;font-family: 'Roboto Condensed', sans-serif;font-weight: bold">Correo</label>
                <input style="font-family: 'Roboto Condensed', sans-serif;width: 92%" type="emal" class="form-control" name="correo" placeholder="INGRESE CORREO ELECTRONICO" value="">
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-6">
                <label style="margin-left: -270px;font-family: 'Roboto Condensed', sans-serif;font-weight: bold">Celular</label>
            <input style="font-family: 'Roboto Condensed', sans-serif;width: 84%" type="text" class="form-control" name="celular" placeholder="INGRESE CELULAR" onkeypress="return SoloNumeros(event);" value="">    
            </div>
            
        </div>
        <div class="row">
            <div style="background: #EC8D00;width:350px;-webkit-box-shadow: 9px 6px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 9px 6px 5px 0px rgba(0,0,0,0.75);
box-shadow: 9px 6px 5px 0px rgba(0,0,0,0.75);">
                <a style="color: white" >(3) Domicilio</a>
            </div>
            <div class="col-md-12">
                <br>
                <label style="margin-left: -640px;font-family: 'Roboto Condensed', sans-serif;font-weight: bold">Nacionalidad</label>
                <select style="font-family: 'Roboto Condensed', sans-serif;width: 92%" class="form-select" aria-label="Default select example" name="nacionalidad">
                    <option value="0">SELECCIONE</option>
                    <option value="1">Peruano</option>
                    <option value="2">Extranjero</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label style="margin-left: -100px;font-family: 'Roboto Condensed', sans-serif;font-weight: bold">Departamento</label>
        <select style="font-family: 'Roboto Condensed', sans-serif;width: 73%" class="form-select" aria-label="Default select example" name="departamento">
        <option value="-1">----Seleccione un departamento----</option>
        <option value="1">AMAZONAS</option>
        <option value="2">ANCASH</option>
        <option value="3">APURIMAC</option>
        <option value="4">AREQUIPA</option>
        <option value="5">AYACUCHO</option>
        <option value="6">CAJAMARCA</option>
        <option value="7">CUSCO</option>
        <option value="8">HUANCAVELICA</option>
        <option value="9">HUANUCO</option>
        <option value="10">ICA</option>
        <option value="11">JUNIN</option>
        <option value="12">LA LIBERTAD</option>
        <option value="13">LAMBAYEQUE</option>
        <option selected="selected" value="14">LIMA</option>
        <option value="24">LIMA</option>
        <option value="15">LORETO</option>
        <option value="16">MADRE DE DIOS</option>
        <option value="17">MOQUEGUA</option>
        <option value="18">PASCO</option>
        <option value="19">PIURA</option>
        <option value="20">PUNO</option>
        <option value="21">SAN MARTIN</option>
        <option value="22">TACNA</option>
        <option value="23">TUMBES</option>
        <option value="25">UCAYALI</option>
    </select>
</div>
<div class="col-md-4">
<label style="margin-left: -230px;font-family: 'Roboto Condensed', sans-serif;font-weight: bold">Provincia</label>
    <select style="font-family: 'Roboto Condensed', sans-serif" class="form-select" aria-label="Default select example" name="provincia">
        <option value="-1">-------Seleccione una provincia-------</option>
        <option value="9">BARRANCA</option>
        <option value="2">CAJATAMBO</option>
        <option value="3">CANTA</option>
        <option value="4">CAÑETE</option>
        <option value="8">HUARAL</option>
        <option value="6">HUAROCHIRI</option>
        <option value="5">HUAURA</option>
        <option selected="selected" value="1">LIMA</option>
        <option value="10">OYON</option>
        <option value="7">YAUYOS</option>
    </select></div>
<div class="col-md-4">
    <label style="margin-left: -150px;font-family: 'Roboto Condensed', sans-serif;font-weight: bold">Distrito</label>
        <select style="font-family: 'Roboto Condensed', sans-serif;width: 73%" class="form-select" aria-label="Default select example" name="distrito">
        <option value="-1">---------Seleccione un distrito---------</option>
        <option value="2">ANCON</option>
        <option value="3">ATE - VITARTE</option>
        <option value="25">BARRANCO</option>
        <option value="4">BREÑA</option>
        <option value="44">CANTO GRANDE</option>
        <option value="5">CARABAYLLO</option>
        <option value="1">CERCADO DE LIMA</option>
        <option value="7">CHACLACAYO</option>
        <option value="8">CHORRILLOS</option>
        <option value="99">CHOSICA</option>
        <option value="39">CIENEGUILLA</option>
        <option value="6">COMAS</option>
        <option value="35">EL AGUSTINO</option>
        <option value="34">INDEPENDENCIA</option>
        <option value="33">JESUS MARIA</option>
        <option value="10">LA MOLINA</option>
        <option value="9">LA VICTORIA</option>
        <option value="11">LINCE</option>
        <option selected="selected" value="42">LOS OLIVOS</option>
        <option value="12">LURIGANCHO</option>
        <option value="13">LURIN</option>
        <option value="14">MAGDALENA DEL MAR</option>
        <option value="15">MIRAFLORES</option>
        <option value="16">PACHACAMAC</option>
        <option value="18">PUCUSANA</option>
        <option value="17">PUEBLO LIBRE</option>
        <option value="19">PUENTE PIEDRA</option>
        <option value="20">PUNTA HERMOSA</option>
        <option value="21">PUNTA NEGRA</option>
        <option value="22">RIMAC</option>
        <option value="23">SAN BARTOLO</option>
        <option value="40">SAN BORJA</option>
        <option value="24">SAN ISIDRO</option>
        <option value="46">SAN JOSE DE SURCO</option>
        <option value="37">SAN JUAN DE LURIGANCHO</option>
        <option value="36">SAN JUAN DE MIRAFLORES</option>
        <option value="38">SAN LUIS</option>
        <option value="26">SAN MARTIN DE PORRES</option>
        <option value="27">SAN MIGUEL</option>
        <option value="43">SANTA ANITA</option>
        <option value="29">SANTA ROSA</option>
        <option value="30">SANTIAGO DE SURCO</option>
        <option value="28">STA MARIA DEL MAR</option>
        <option value="31">SURQUILLO</option>
        <option value="41">VILLA EL SALVADOR</option>
        <option value="32">VILLA MARIA DEL TRIUNFO</option>
        <option value="45">ZARATE</option>
    </select></div>
    <div class="row">
        <div class="">
            <label style="margin-left: -650px;font-family: 'Roboto Condensed', sans-serif;font-weight: bold">Dirección</label>
            <input style="font-family: 'Roboto Condensed', sans-serif;width: 92%" class="form-control" type="text" name="direccion" placeholder="INGRESE LA DIRECCIÓN" value="">           
        </div>
    </div>
    <div class="row">
        <div style="background: #EC8D00;width:350px;-webkit-box-shadow: 9px 6px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 9px 6px 5px 0px rgba(0,0,0,0.75);
box-shadow: 9px 6px 5px 0px rgba(0,0,0,0.75);">
                <a style="color: white" >(4) Realice su consulta</a>
            </div>
        <div class="col-md-12">
            <br>
            <label style="margin-left: -660px;font-family: 'Roboto Condensed', sans-serif;font-weight: bold">Asunto</label>
            <input style="font-family: 'Roboto Condensed', sans-serif;width: 92%" class="form-control" type="text" name="asunto" placeholder="INGRESE EL ASUNTO" value="">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label style="margin-left: -660px;font-family: 'Roboto Condensed', sans-serif;font-weight: bold">Mensaje</label>
            <textarea  style="font-family: 'Roboto Condensed', sans-serif;height: 300px;width: 91%" class="form-control" name="mensaje" placeholder="INGRESE EL MENSAJE..."></textarea>
        </div>
        <input hidden="true" type="text" name="estado" value="1">
        <input hidden="true" type="text" name="Tipo_comunicacion" value="1">
    </div>
        </div>
        <button style="font-family: 'Roboto Condensed', sans-serif;width: 92%" type="submit"  id="btnRegistrar" name="btnRegistrar" class="form-control btn btn-success"><img style="width: 20px" src="https://images.emojiterra.com/twitter/v13.0/512px/1f4d6.png"> REGISTRAR</button>
    </form>  
     </div>
         
    </center>
       <?php
        
         if(isset($_REQUEST['btnRegistrar'])){
            $tipoco=$_REQUEST['Tipo_comunicacion'];
            $area=$_REQUEST['area'];
            $tipoper=$_REQUEST['tipo_persona'];
            $nom=$_REQUEST['nombres'];
            $apellidop=$_REQUEST['apellidop'];
            $apellidom=$_REQUEST['apellidom'];
            $rs=$_REQUEST['razon_social'];
            $tipodoc=$_REQUEST['tipo_odcumento'];
            $ndoc=$_REQUEST['ndocumento'];
            $telefono=$_REQUEST['telefono'];
            $correo=$_REQUEST['correo'];
            $celular=$_REQUEST['celular'];
            $nacio=$_REQUEST['nacionalidad'];
            $depar=$_REQUEST['departamento'];
            $prov=$_REQUEST['provincia'];
            $distri=$_REQUEST['distrito'];
            $dir=$_REQUEST['direccion'];
            $asunto=$_REQUEST['asunto'];
            $mensaje=$_REQUEST['mensaje'];
            $estado=$_REQUEST['estado'];
            $fecha=date("Y-m-d");

           // if($tipoco==""){
             //   echo "<script>alert('Debe de Ingresar el tipo de Reclamo');</script>";//die();
            //}
            if($area==""){
                echo "<script>alert('Debe de Ingresar el Area');</script>";die();
            }
            if($tipoper==""){
                echo "<script>alert('Debe de Ingresar el tipo de persona');</script>";die();
            }
            if($nom==""){
                echo "<script>alert('Debe de Ingresar los nombres');</script>";die();
            }
            if($apellidop==""){
                echo "<script>alert('Debe de Ingresar el apellido paterno');</script>";die();
            }
            if($apellidom==""){
                echo "<script>alert('Debe de Ingresar el apellido materno ');</script>";die();
            }
            if($tipodoc==""){
                echo "<script>alert('Debe de Ingresar el tipo de Documento ');</script>";die();
            }
            if($ndoc==""){
                echo "<script>alert('Debe de Ingresar el numero de documento');</script>";die();
            }
            if($telefono==""){
                echo "<script>alert('Debe de Ingresar el telefono');</script>";die();
            }
            if($correo==""){
                echo "<script>alert('Debe de Ingresar el correo ');</script>";die();
            }
            if($celular==""){
                echo "<script>alert('Debe de Ingresar el celular');</script>";die();
            }
            if($nacio==""){
                echo "<script>alert('Debe de Ingresar la nacionalidad ');</script>";die();
            }
            if($depar==""){
                echo "<script>alert('Debe de Ingresar el departamento');</script>";die();
            }
            if($prov==""){
                echo "<script>alert('Debe de Ingresar el provincia');</script>";die();
            }
            if($distri==""){
                echo "<script>alert('Debe de Ingresar el distrito');</script>";die();
            }
            if($dir==""){
                echo "<script>alert('Debe de Ingresar el dirección');</script>";die();
            }
            if($asunto==""){
                echo "<script>alert('Debe de Ingresar el asunto');</script>";die();
            }
            if($mensaje==""){
                echo "<script>alert('Debe de Ingresar el mensaje');</script>";die();
            }
            if($estado==""){
                echo "<script>alert('Debe de Ingresar el estado');</script>";die();
            }
            
        $objCli=new Libro($tipoco,$tipoper,$nom,$apellidop,$apellidom,$tipodoc,$ndoc,$correo,$telefono,$celular,$nacio,$depar,$prov,$distri,$dir,$asunto,$mensaje,$rs,$estado,$area,$fecha);
            
            $Metodos=new MetodosDAO();
            $i=$Metodos->RegistrarLibro($objCli);
            
        if($i==1){
           $i=0;
           $cnx=new ConexionDB();
           $cn=$cnx->getConexion();
           $resp=$cn->prepare("SELECT * FROM  registrolibro ORDER by id_registro DESC LIMIT 1");
          $resp->execute();
            foreach ($resp as $row)
        {
            $idreg=$row['id_registro'];
        }
           $mail = new PHPMailer(true);
try
    {
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'geancarlo1233@gmail.com';                     // SMTP username
    $mail->Password   = 'Romero123';                               // SMTP password
    $mail->SMTPSecure = 'TLS';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 25;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    //Recipients
    $mail->setFrom('geancarlo1233@gmail.com', 'Distribuidora Norteña');
    $mail->addAddress($correo, 'USUARIO');   // Add a recipient
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = utf8_decode('Registro de Reclamo - Código de Envío  R-000'.$idreg.'');
    $mail->Body    = '<!DOCTYPE html>
     <html>
     <head>
         <style>
.wrapper {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 0px;
}
</style>
     </head>
     <body style="background-color:gray">
     <center>
<div style="width:450px"  class="wrapper">
    <div style=" grid-column: 1;grid-row: 4;background-color: gray"></div>
    <div style=" grid-column: 2;grid-row: 4;background-color: rgb(0, 136, 118)">
        <a style="font-size: 30px;font-weight: bold;color: white;margin-left: 90px" >Reclamo</a>
        <img style="margin-left: 40px;width:50px" src="http://solgasdelivery.pe/wp-content/uploads/2019/03/balon.png">
    </div>
    <div style=" grid-column: 3;grid-row: 4;background-color: gray"></div>
</div>
</center>
<center>
<div style="width:450px" class="wrapper">
    <div style=" grid-column: 1;grid-row: 4;background-color: gray"></div>
    <div style=" grid-column: 2;grid-row: 4;background-color: white">
        <center>
        <img src="https://transformadoressiosac.com/wp-content/uploads/2019/07/visto.jpg">
    </center>
    </div>
    <div style=" grid-column: 3;grid-row: 4;background-color: gray"></div>
</div>
</center>
<center>
<div style="width:450px" class="wrapper">
    <div style=" grid-column: 1;grid-row: 4;background-color: gray"></div>
    <div style=" grid-column: 2;grid-row: 4;background-color: white">
        <center><a style="font-size: 17px;font-weight: bold">¡Registro de su Reclamo Ingresado!</a></center>
    </div>
    <div style=" grid-column: 3;grid-row: 4;background-color: gray"></div>
</div>
</center>
<center>
<div style="width:450px" class="wrapper">
    <div style=" grid-column: 1;grid-row: 4;background-color: gray"></div>
    <div style=" grid-column: 2;grid-row: 4;background-color: white">
        <center><div style="width: 300px"><p style="text-align: justify">Sr. Cliente, su reclamo fue registrado con exito, el cual tiene los siguientes datos.</p></div></center>
    </div>
    <div style=" grid-column: 3;grid-row: 4;background-color: gray"></div>
</div>
</center>
<center>
<div style="width:450px" class="wrapper">
    <div style=" grid-column: 1;grid-row: 4;background-color: gray"></div>
    <div style=" grid-column: 2;grid-row: 4;background-color: white">
        <br>
        <br>
        <center>
        <table>
            <thead style="background-color: rgb(0, 136, 118)">
                <tr>
                    <td style="color:white">Items</td>
                    <td style="color:white"><center>Datos</center></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Código de Envío</td>
                    <td style="font-weight:bold;font-size:15px">R-000'.$idreg.'</td>
                </tr>
                <tr>
                    <td>Correo:</td>
                    <td>'.$correo.'</td>
                </tr>
                
            </tbody>
        </table>
<div style="width: 300px"><p style="text-align: justify"><br>

<a>Mensaje:</a>
<p>'.$mensaje.'</p>
</div>

        </center>
        <br>
        <br>
    </div>
    <div style=" grid-column: 3;grid-row: 4;background-color: gray"></div>
</div>
</center>
<center>
<div style="width:450px" class="wrapper">
<div style=" grid-column: 1;grid-row: 4;background-color: gray"></div>
<div style=" grid-column: 2;grid-row: 4;background-color: white">
<div style="width: 300px"><p style="text-align: justify"><br>

<a style="color:red">Si desea informarnos algun otro detalle escribamos al correo,gracias</a></p>
</div>
</div>
<div style=" grid-column: 3;grid-row: 4;background-color: gray"></div>
</div>
</center>
<center>
<div style="width:450px" class="wrapper">
    <div style=" grid-column: 1;grid-row: 4;background-color: gray"></div>
    <div style=" grid-column: 2;grid-row: 4;background-color: white">
        <center><img style="width:50px" src="http://solgasdelivery.pe/wp-content/uploads/2019/03/balon.png"></center>
        <center><a href="https://www.munilosolivos.gob.pe/muni1/">DISTRIBUIDORA NORTEÑA</a></center>
         <div style="background-color:rgb(0, 136, 118)">
        <br>
        <center><p style="color: white;font-size: 11px">Cualquier duda o consulta escribanos al correo de geancarlo1233@gmail.com</p></center>
        <br>
       </div>
    </div>
    <div style=" grid-column: 3;grid-row: 4;background-color: gray"></div>
</div></center>
     </body>
     </html>';
    $mail->send();
    // echo '1';
    echo"<script>alert('REGISTRO SU RECLAMO CON EXITO||SE ENVIO UNA COPIA A SU CORREO');window.location.href='Catalogo.php'</script>";
} catch (Exception $e) {
    echo "0";
} 
        echo "<script>alert('Se Registro su Reclamo con Exito :)');window.location.href='Catalogo.php';</script>";
        }else{
            echo"<script>alert('Error Al Registrar su Reclamo :( ');</script>";
        }
        
        }
        ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        function validar(){
            var tipop=document.getElementById("tipo_persona").value;
            var tipod=document.getElementById("tipo_documento").value;
            if (tipop==0){
                alert("Debe de Seleccionar el Tipo de Persona");
            }
            if (tipop==1){
                $("#tipo_documento").val("1");
                var pnatural=document.getElementById("pnatural").hidden=false;
                var pjuridica=document.getElementById("pjuridica").hidden=true;
                return;
            }
            if (tipop==2){
            $("#tipo_documento").val("3");
            var pjuridica=document.getElementById("pjuridica").hidden=false;
            var pnatural=document.getElementById("pnatural").hidden=true;
                return;                
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
</body>
</html>