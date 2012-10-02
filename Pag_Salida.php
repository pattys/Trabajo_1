<?php



ini_set("display_errors", "on");
error_reporting(E_ALL); 

session_name("patty");
session_start();


if(!isset($_SESSION['clave_ok'])){
    
    header("Location: Pag_Inicio.php");
    exit();
}
?>

<h2> Bienvenidooooooo!!!!!!!</h2>

 <a href="Pag_Cerrar_Sess.php?salir=dale">Cerrar session</a>
