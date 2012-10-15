
<?php

include("../Conexion/conexion.php");

   $result =consultar("select * from Choferes", $conectar); 
 ?>  
       <table border ="1" bgcolor="#CCEEFF " cellpadding="6" cellspacing="9" width="700">
<tr>
<th> Nombre y Apellido </th> 
<th> Licencia </th>
<th> Domicilio </th>
<th> Vencimiento_Lic </th>
<th> Clase </th>

<tr>

<?php foreach ($result as $variable):?>

<tr>
<td> <?php echo $variable['Nombre']; ?> </td> 
<td> <?php echo $variable['Licencia']; ?> </td>
<td> <?php echo $variable['Domicilio']; ?> </td>
<td> <?php echo $variable['Vencimiento_Lic']; ?> </td>
<td> <?php echo $variable['Clase']; ?> </td>
	
<tr> 

<?php endforeach ?> 

</table>

