<?php

 require '../muestra_errores.php';

if(isset($_GET['salir']) && $_GET['salir'] == "dale")
{
  session_unset();
  session_destroy();
  
  header("Location: ../index.php");
}

