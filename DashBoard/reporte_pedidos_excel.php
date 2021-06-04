<?php
   header('Content-type:application/xls');
   header('Content-Disposition: attachment; filename=Listado_Pedidos.xls');
   $conexion=mysqli_connect("localhost","root","","bdsolgas");
   $query="Select P.numpedido, C.nombre, P.fecha, R.descripcion, R.precio, D.can, (R.precio * D.can)as Total
            from pedido P INNER JOIN clientes C
            on c.codcli = p.codcli
            INNER JOIN detallepedido D 
            on P.numpedido = D.numpedido
            INNER JOIN productos R
            ON D.codpro = R.codpro";
   $exe=mysqli_query($conexion,$query);

?>
<table border="1">
 <tr>
  <td style="background:#3F79BF;color:white;font-weight:bold;font-size:30px" colspan="7"><center>REPORTE DE PEDIDOS</center></td>
 </tr>
 <tr>
  <th style="color:back"><center>Codigo Pedido</center></th>
  <th style="color:back"><center>Nombres y Apellidos</center></th>
  <th style="color:back"><center>Fecha De Pedido</center></th>
  <th style="color:back"><center>Producto</center></th>
  <th style="color:back"><center>Precio</center></th>
<th style="color:back"><center>Cantidad</center></th>
<th style="color:back"><center>Total a Pagar</center></th>
 </tr>
 <?php
 while($row=mysqli_fetch_assoc($exe)){
 ?>
 <tr>
 <td><center>PED-000-<?php echo $row['numpedido']; ?></center></td>
 <td><center><?php echo $row['nombre']; ?></center></td>
 <td><center><?php echo $row['fecha']; ?></center></td>
 <td><center><?php echo $row['descripcion']; ?></center></td>
 <td><center><?php echo $row['precio']; ?></center></td>
<td><center><?php echo $row['can']; ?></center></td>
<td><center><?php echo $row['Total']; ?></center></td>
 </tr>
 <?php
 }
 ?>
</table>

 