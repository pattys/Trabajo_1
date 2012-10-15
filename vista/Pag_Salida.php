<?php
    
 require '../muestra_errores.php';


if(!isset($_SESSION['clave_ok'])){
    
    header("Location: ../index.php");
    exit();
}

$opciones = 'Inicio.php';
if(isset ($_GET['op'])){
    switch ($_GET['op']) {
        case 1:$opciones = '../Autos/autos.php';
            break;
         case 2:$opciones = '../Choferes/Chofer.php';
            break;
           case 3:$opciones = '../insercion_choferes.php';
            break;
    }
}
?>

<h2>Sistema de Autos</h2>


 <a href="../cerrar/Pag_Cerrar_Sess.php?salir=dale">Cerrar session</a>|

 <a href="?op=1">Autos<a>|
        
  <a href=" ?op=2">Choferes</a>
  
   <a href=" ?op=3">Nuevo Chofer</a>
  
 
  <?php 
   include $opciones;?>
  
  
