<?php

 require 'muestra_errores.php';


if(!isset($_SESSION['clave_ok'])){
    
    header("Location: Pag_Inicio.php");
    exit();
}
?>

<h2>Panel de Control</h2>

 <a href="Pag_Cerrar_Sess.php?salir=dale">Cerrar session</a>
