<?php
include '../Utils/ConexionDB.php';
$fei=$_POST['fei'];
$fef=$_POST['fef'];
$cnx=new ConexionDB(); //OBJETO $cnx DE TIPO ConexionDB (INSTANCIADO)
$cn=$cnx->getConexion();
$res = $cn->prepare("SELECT v.numpedido,v.codCli,c.nombre,v.fecha FROM pedido v inner join clientes c on v.codcli=c.codcli WHERE v.fecha BETWEEN '$fei' and '$fef'");
 // "SELECT v.numpedido,v.codCli,c.nombre,v.fecha FROM pedido v inner join clientes c on v.codcli=c.codcli WHERE v.fecha BETWEEN '$fei' and '$fef'"
$res->execute();
foreach ($res as $key => $value) {
echo '<tr>';
echo '<td align="center"><button  type="button"  class="btn btn-info" onclick="mostrarDetalle('.$value[0].')">Ver Detalle</button></td>';
echo '<td align="center">"PED-000-"'.$value[0].'</td>';
echo '<td align="center">"CLI-000-"'.$value[1].'</td>';
echo '<td align="center">'.$value[2].'</td>';
echo '<td align="center">'.$value[3].'</td>';
echo '<td align="center"><a class="btn btn-warning" onclick="imprimir('.$value[0].');" >Imprimir Boleta</a></td>';
echo '</tr>';
}
?>