
<?php

include("../Conexion/conexion.php");

   $result =consultar("select * from Autos",$conectar); 
 ?>  

       <table border ="1" bgcolor="#cccccc" cellpadding="6" cellspacing="0" width="400">
<tr>
<th> Modelo </th> 
<th> Color </th>
<th> A&ntilde;o_auto </th>
<th> Id </th>
<th> Patente </th>
<th> Imagen </th> 
<th> Chasis </th>
<th> Venc_Seguro </th>
<th> Categoria </th> 
<tr>

<?php foreach ($result as $variable):?>

<tr>
<td> <?php echo $variable['Modelo']; ?> </td> 
<td> <?php echo $variable['color']; ?> </td>
<td> <?php echo $variable['año_auto']; ?> </td>
<td> <?php echo $variable['Id']; ?> </td>
<td> <?php echo $variable['Patente']; ?> </td>
<td> <?php echo $variable['Imagen']; ?> </td> 
<td> <?php echo $variable['chasis']; ?> </td>
<td> <?php echo $variable['Venc_Seguro'];?>  </td>
<td> <?php echo $variable['Categoria'];?>  </td> 
<tr> 

<?php endforeach ?> 

</table>
