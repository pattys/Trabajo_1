<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php 
 ini_set("display_errors","On");
    error_reporting(E_ALL);
    
    session_name("patty");
    session_start();
        if(isset($_SESSION['clave_ok']) && isset($_SESSION['usser'])){
    
    header("Location: Pag_Salida.php");
    exit();
}
 ?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Autos Provinciales</title>
    </head>
    <body background="Imagenes/escudo.png"> 
        <h3>Manejo de Automotores Provincial</h3>
        
         <img src= "Imagenes/foto-de-auto-electrico.jpg"/> 
               
                    
                <form method="post" action="Pag_Controlador.php">
             <h3>PAGINA CENTRAL DE AUTOMOTORES DE LA PROVINCIA!</h3><br>
            
             <input type ="text" value ="Usuario" name="usser"/>
             <input type ="text" value ="Contraseña" name="clave"/>
           <input type="submit" value="Entrar"/>
             </form>
		

   <!--   <div id="menu">
        	<ul>
            	<li id="menu1"><a href="index.html">Inicio</a></li>
                <li id="menu2"><a href="empresa.html">La Empresa</a></li>
                <li id="menu3"><a href="atencion_cliente.html">Atencion al Cliente</a></li>
                <li id="menu4"><a href="intranet.html">Intranet</a></li>
            </ul>
        </div>
   -->
		
		
			<fieldset>
				Todos los derechos reservados<br>
                Nestor Aspiroz. |  Estrada Patricia
                        </fieldset>
    </body>
</html>
