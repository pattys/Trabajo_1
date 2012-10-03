<?php

 require 'muestra_errores.php';

if(isset($_SESSION['clave'])){
    
    header("Location: Pag_Salida.php");
    exit();
}

if(isset($_POST['clave'])AND isset ($_POST['usser'])){
    
    if($_POST['clave']=="patty" AND $_POST['usser']=="patty"){
       
        $_SESSION['clave_ok']="si";
        $_SESSION['usser']="si";
        header("Location: Pag_Salida.php");
        
        
    }else{
        header("Location: Pag_Inicio.php");
        exit();
        
        }
    
}else{
    header("Location: Pag_Inicio.php");
    exit();
}
