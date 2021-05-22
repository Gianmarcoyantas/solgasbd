<!-- PARA MANIPULAR PARA EL CATALOGO Y EL CARRITO  -->
<?php
//LA LISTA DE PRODUCTOS SE ALMACENA EN UNA SESION
session_start();

$op=$_REQUEST['op'];
include './MetodosDAO.php';//LLAMO A LA CLASE METODOSDAO
//OP ES PARA MANIPULAR LISTA Y CARRITO
//1=LISTA DE PRODUCTOS
//2=CARRITO
echo $op;

switch ($op){
    case 1: //LISTA DE PRODUCTOS
        unset($_SESSION['lista']);//LIMPIO LISTA DE TIPO SESION
        $objMetodos=new MetodosDAO(); //LLAMO A MetodosDAO
        $lista=$objMetodos->ListarProductos();
        $_SESSION['lista']=$lista;
        header("Location: ../Vista/Catalogo.php");//DIRECCIONA A CATALOGO.PHP
        break;
    case 2://CARRITO 
        if(isset($_REQUEST['id'])){ //SI RECIBO EL ID ISSET PREGUNTA CONTIENE ALGO
            $id=$_REQUEST['id'];  //SI CONTIENE CREO VARIABLE &id
        }else{
            $id=1;
        }
        //RECIBIR LA ACCION Q PUEDE SER(AGREGAR, ELIMINAR, Y VACIO CUANDO EL CARRITO NO TENGA NINGUN PRODUCTO)
        if(isset($_REQUEST['accion'])){
            $accion=$_REQUEST['accion'];
        }else{
            $accion='vacio';
        }
        switch($accion){
            case'agregar': //AL DAR CLICK EN AGREGAR A CARRITO, ENVIO CANTIDAD Y EL ID
                $can=$_REQUEST['txtCan'];
                if(isset($_SESSION['carrito'][$id])) //LLENO EL CARRITO
                    $_SESSION['carrito'][$id]+=$can;
                else
                    $_SESSION['carrito'][$id]=$can;
            break;
            case 'eliminar':
                if(isset($_SESSION['carrito'][$id])){
                    $_SESSION['carrito'][$id]--;
                if($_SESSION['carrito'][$id]==0)
                    unset($_SESSION['carrito'][$id]);}
            break;
            case 'vacio':
                unset($_SESSION['carrito']);
                break;
            }
       header("Location: ../Vista/Carrito.php");
       break;
   
 }

?>
<!-- ISSET PREGUNTA SI ES QUE EXISTE CONTENIDO -->
