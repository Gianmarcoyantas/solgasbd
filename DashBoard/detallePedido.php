<!DOCTYPE html>
<?php
include '../DAO/MetodosDAO.php';

$num=$_REQUEST['num'];

$objMetodos=new MetodosDAO();
$lista=$objMetodos->ListarPedidosNum($num);

?>

<h2 style="font-size: 30px" align="center"><b>DETALLE DEL PEDIDO</b></h2>
<center>
    <table class="table" border="1" width="700" align="center" style="margin-top: 10px">
        <tr style="background: slategray;color: white">
        <th style="font-size: 15px" align="center"><center>Numero Del Pedido</center></th>
        <th style="font-size: 15px" align="center"><center>Codigo Del Producto</center></th>
        <th style="font-size: 15px" align="center"><center>Descripcion Del Producto</center></th>
        <th style="font-size: 15px" align="center"><center>Precio</center></th>
        <th style="font-size: 15px" align="center"><center>Cantidad</center></th>
        <th style="font-size: 15px" align="center"><center>Total</center></th>
    </tr>
         <?php
foreach ($lista as $row) {
    ?>
<tr>
    <td align="center"><?php echo "PED-000-",$row[0]?></td>
    <td align="center"><?php echo "PRO-000-".$row[1]?></td>
    <td align="center"><?php echo $row[2]?></td>
    <td align="center"><?php echo $row[3]?></td>
    <td align="center"><?php echo $row[4]?></td>
    <td align="center"><?php echo $row[3]*$row[4]?></td>
</tr>
<?php
}
?>
</table>
</center>