<?php

include '../Utils/ConexionDB.php'; //TRAEMOS LA CONEXION DE LA BD
include '../Beans/Cliente.php';
include '../Beans/DetalleVenta.php';
include '../Beans/Venta.php';
include '../Beans/Producto.php';



//CLASE MetodosDAO PARA ALMACENAR TODOS LOS METODOS QUE VAMOS A USAR
class MetodosDAO {
   
        //METODO ListarProductos PARA MOSTRAR PRODUCTOS EN EL CATALOGO
        public function ListarProductos(){
        $cnx=new ConexionDB(); //OBJETO $cnx DE TIPO ConexionDB (INSTANCIADO)
        $cn=$cnx->getConexion();
        $res = $cn->prepare("select * from productos");
        $res->execute(); //EJECUTA EL SELECT * FROM PRODUCTOS
        //FOREACH PARA DESCOMPONER POR FILAS Y LO PONEMOS DENTRO DE VARIABLE LISTA DE TIPO AREGLO
        foreach ($res as $row) 
        {
            $lista[]=$row;
        }
        return $lista;
    }
    
    //METODO ListarProductosCod PARA RECIBIR UN CODIGO (DONDE YO HAGA CLICK)
    public function ListarProductosCod($cod){
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res = $cn->prepare("select * from productos where codPro=$cod");
        $res->execute();
        foreach ($res as $row)
        {
            $lista=$row;
        }
        return $lista;
    }
    
    //METODO DPARA QUE EL CLIENTE SE REGISTRE
    public function RegistrarCliente(Cliente $cli){
        $i=0;
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res=$cn->prepare("INSERT  INTO clientes VALUES(0,'$cli->nomCli','$cli->dir','$cli->dis','$cli->correo', '$cli->pas', '$cli->check');");
        $i=$res->execute();
        return  $i;
    }

    public function RegistrarLibro(Libro $libro){
            //var_dump($libro);die();
        $i=0;
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res=$cn->prepare("INSERT  INTO registrolibro VALUES(0,'$libro->tipoco','$libro->tipoper','$libro->nom','$libro->apellidop','$libro->apellidom','$libro->tipodoc','$libro->ndoc','$libro->correo','$libro->telefono','$libro->celular','$libro->nacio','$libro->depar','$libro->prov','$libro->distri','$libro->dir','$libro->asunto','$libro->mensaje','$libro->rs','$libro->estado','$libro->area','$libro->fecha')");
        $i=$res->execute();
        
        return  $i;
    }


    public function RegistrarRespuesta(Respuesta $libro){
            //var_dump($libro);die();
        $i=0;
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res=$cn->prepare("INSERT  INTO respuesta VALUES(0,'$libro->id','$libro->mensaje','$libro->area','$libro->emailarea','$libro->asunto','$libro->fecha')");
        $i=$res->execute();
        return  $i;
    }
    
    //INICIAR SESION CON CORREO Y PASSWORD
    public function validar(Cliente $cli){
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res = $cn->prepare("select * from clientes "
                . "where correo='$cli->correo' and pas='$cli->pas'");
        $res->execute();
        foreach ($res as $row)
        {
            $lista=$row;
        }
        return $lista;
    }
    
    //REGISTRAR PEDIDO EN LA BD
    public function registrarVenta(Venta $venta){ //registrar pedido
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res=$cn->prepare("INSERT  INTO pedido VALUES(null," //modidicado
                . "'$venta->codCli','$venta->fecha')");
        $res->execute();
        //return $res;
    }
    
    //ALMACENA NRO PEDIDO EN BD 
    public function numeroVenta(){ //numero pedido
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res = $cn->prepare("select max(numpedido) from pedido"); //modificado
        $res->execute();
        foreach ($res as $row)
        {
            $num=$row;
        }
        return $num;
    }
    
    //REGISTRO DETALLE DE PEDIDO
    public function detalleVenta(DetalleVenta $det){ //detalle pedido
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res=$cn->prepare("INSERT  INTO detallepedido VALUES($det->num," //modificado
                . "'$det->codpro','$det->can')");
        $res->execute();
         $resp=$cn->prepare("UPDATE productos SET stock=stock-$det->can WHERE codpro='$det->codpro'");
         $resp->execute();
        return $res;
    }
    
    //METODO USA ADMIN PARA AGREGAR PRODUCTOS AL CATALOGO
    public function agregarProducto(Producto $pro){ //grabar producto
        
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res=$cn->prepare("INSERT into productos VALUES(null,'$pro->des',$pro->pre,"
                . "$pro->stock,'$pro->estado','$pro->detalle','$pro->imagen')");
        $res->execute();        
    }
    
    //METODO USA ADMIN PARA ELIMINAR PRODUCTOS DEL CATALOGO
    public function eliminarProducto($cod){ //eliminar producto
        
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res=$cn->prepare("delete from productos where codpro=$cod");
        $res->execute();        
    }
    
    //METODO USA ADMIN PARA EDITAR PRODUCTOS DEL CATALOGO
    public function editarProducto(Producto $pro){ //editar producto
        
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res=$cn->prepare("update productos set descripcion='$pro->des',precio=$pro->pre,"
                . "stock=$pro->stock,estado='$pro->estado',detalle='$pro->detalle',imagen='$pro->imagen'"
                . " where codpro=$pro->cod");
        $res->execute();        
    }
    
    //METODO DEL ADMIN PARA LISTAR PEDIDO
    public function ListarPedidos(){ 
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res = $cn->prepare("select v.numpedido,v.codCli,c.nombre,v.fecha"
                . " from pedido v inner join clientes c on v.codcli=c.codcli");
        $res->execute();
        foreach ($res as $row)
        {
            $lista[]=$row;
        }
        return $lista;
    }

    public function ListarEntradas(){ 
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res = $cn->prepare("select * from registrolibro where estado='1'");
        $res->execute();
        foreach ($res as $row)
        {
            $lista[]=$row;
        }

            return $lista;
     
        
    }

    public function ListarPapelera(){ 
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res = $cn->prepare("select * from registrolibro where estado='2'");
        $res->execute();
        foreach ($res as $row)
        {
            $lista[]=$row;
        }
        return $lista;
    }
    public function ListarEnviados(){ 
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res = $cn->prepare("select * from registrolibro where estado='3'");
        $res->execute();
        foreach ($res as $row)
        {
            $lista[]=$row;
        }
        return $lista;
    }
    
    //METODO DEL ADMIN PARA LISTAR DETALLE DE PEDIDO
    public function ListarPedidosNum($num){ 
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res = $cn->prepare("select d.numpedido,d.codpro,p.descripcion,p.precio,d.can"
                . " from detallepedido d inner join productos p on d.codpro=p.codpro where numpedido=$num");
        $res->execute();
        foreach ($res as $row)
        {
            $lista[]=$row;
        }
        return $lista;
    }
    
    //METODO DEL ADMIN PARA LISTAR CLIENTES
       public function ListarClientes(){
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res = $cn->prepare("select * from clientes");
        $res->execute();
        foreach ($res as $row)
        {
            $lista[]=$row;
        }
        return $lista;
    }
}
