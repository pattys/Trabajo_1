
<!DOCTYPE html>
<?php 
 
        require 'muestra_errores.php';
        
        if(isset($_SESSION['clave_ok']) && isset($_SESSION['usser'])){
    
    header("Location: vista/Pag_Salida.php");
    exit();
}
 ?>

<html>
    <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Gestion Automotor - Provincia del Chubut</title>
          <link rel="stylesheet" type="text/css" href="css/estilos.css">
         
          <div id="cabecera"> 
              <div id="text_cabecera">Gestion Automotor<br>Provincia del Chubut</div>
              <div id="logo_cabecera"><img src="Imagenes/escudo.png" width="150" height="100"></div>
          </div>
     
    </head>
    
    <body>
        
        <br>
        
        <div id="contenedor_principal">
                <img id="img_principal"align="left" src= "Imagenes/Autitos.jpg" />
                <div id="form_logeo">
                <form method="post" action="Pag_Controlador.php">
                Usuario<br><br>   
                <input type ="text"  name="usser"/>
                <input type="submit" value="Entrar"/><br><br>
                Contraseña<br><br><input type ="password"  name="clave"/>
                </form></div>
        </div>
        			
    </body>
    
    <footer>
        <div id="contenedor_footer">Pagina Hecha por:<br>
            Nestor Aspiroz. |  Estrada Patricia
        </div>
    </footer>
</html>
