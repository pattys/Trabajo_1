<?php
include 'Conexion/conexion.php';

if(isset($_POST) && $_POST['Guardar']){

      $nombre= $_POST['nombre'];
      $licencia= $_POST['licencia'];
      $domicilio= $_POST['domicilio'];
      $vencimiento_carnet= $_POST['vencimiento_carnet'];
      $categoria= $_POST['categoria'];

$result1= consultar("INSERT INTO Choferes (Nombre, Licencia, Domicilio, Vencimiento_Lic, Clase) VALUES ('$nombre', '$licencia', '$domicilio', '$vencimiento_carnet', '$categoria')", $conectar);
}

    header ("location: ../vista/Inicio.php");

?>
