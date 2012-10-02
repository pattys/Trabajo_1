<?php

ini_set("display_errors", "On");
error_reporting(E_ALL);

session_name("patty");

session_start();

if(isset($_GET['salir']) && $_GET['salir'] == "dale")
{
  session_unset();
  session_destroy();
  
  header("Location: Pag_Inicio.php");
}

