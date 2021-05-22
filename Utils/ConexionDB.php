<?php
//CLASE ConexionDB PARA CONEXION A LA BD
class ConexionDB {
    
    //METODO getConexion PARA CONECTARME A LA BD
    public function getConexion(){
    $cnx=new PDO("mysql:host=localhost;dbname=bdsolgas","root","");    
    return $cnx;
    }

}
