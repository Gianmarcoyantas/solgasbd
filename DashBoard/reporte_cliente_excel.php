<?php
   header('Content-type:application/xls');
   header('Content-Disposition: attachment; filename=Listado_clientes.xls');
   $conexion=mysqli_connect("localhost","root","","bdsolgas");
   $query="SELECT codcli,nombre,direccion,distrito,correo FROM clientes";
   $exe=mysqli_query($conexion,$query);

?>
<table border="1">
 <tr>
  <td style="background:#3F79BF;color:white;font-weight:bold;font-size:30px" colspan="5"><center>REPORTE DE LISTADO DE CLIENTES REGISTRADOS</center></td>
 </tr>
 <tr>
  <th style="color:back"><center>Codigo Cliente</center></th>
  <th style="color:back"><center>Nombres y Apellidos</center></th>
  <th style="color:back"><center>Direccion</center></th>
  <th style="color:back"><center>Distrito</center></th>
  <th style="color:back"><center>Correo</center></th>
 </tr>
 <?php
 while($row=mysqli_fetch_assoc($exe)){
 ?>
 <tr>
 <td><center>COD-000-<?php echo $row['codcli']; ?></center></td>
 <td><center><?php echo $row['nombre']; ?></center></td>
 <td><center><?php echo $row['direccion']; ?></center></td>
 <td><center><?php echo $row['distrito']; ?></center></td>
 <td><center><?php echo $row['correo']; ?></center></td>
 </tr>
 <?php
 }
 ?>
</table>