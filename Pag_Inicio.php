<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php 
 
        require 'muestra_errores.php';
        
        if(isset($_SESSION['clave_ok']) && isset($_SESSION['usser'])){
    
    header("Location: Pag_Salida.php");
    exit();
}
 ?>

<html>
    <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Autos Provinciales</title>
        PAGINA CENTRAL DE AUTOMOTORES DE LA PROVINCIA<br>
        Manejo de Automotores Provincial
    </head>
    <body background="Imagenes/legislatura.jpg"> 
        
        
       
               
                    
               
             
            
              <br>
         <form method="post" action="Pag_Controlador.php">
         <img style="margin-left:2em; "src= "Imagenes/Autitos.jpg" align="left" />
        <div style="float: left; padding: 20px; margin-left:em; border: solid 1px #CCCCCC;background: #ffffff; /* Old browsers */
background: -moz-linear-gradient(top, #ffffff 0%, #e5e5e5 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#e5e5e5)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #ffffff 0%,#e5e5e5 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #ffffff 0%,#e5e5e5 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, #ffffff 0%,#e5e5e5 100%); /* IE10+ */
background: linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e5e5e5',GradientType=0 ); /* IE6-9 */"> 
         Usuario<br><br>   
        <input type ="text" value ="Usuario" name="usser"/>
        <input type="submit" value="Entrar"/><br><br>
         Contraseña<br><br><input type ="text" value ="Contraseña" name="clave"/>
           
             </form></div>
        
			
    </body>
    
    <footer>
        <fieldset style="margin-top: 35%; margin-left: 2em; margin-bottom: 2em;">Todos los derechos reservados<br>
            Nestor Aspiroz. |  Estrada Patricia
        </fieldset></footer>
</html>
