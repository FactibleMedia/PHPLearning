<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido a la plataforma</title>
</head>
<body>
   
   <?php
    
        session_start(); // Esta función crea o reanuda una sesión. Rescatamos lo que hay almacenado en la variable superglobal $_SESSION que utilizamos en otra página.
        
        if(!isset($_SESSION["liveuser"])) { // Comprobamos si hay datos almacenados en la variable superglobal - $_SESSION -.
            
            header ("Location: login.php");
            
        } 
    
    ?>
   
   <h1>Bienvenidos sr usuario</h1>
   
   <?php
    
        echo "Usuario " . $_SESSION["liveuser"] . "<br><br>";
    
    ?>
    
    <a href="endsession.php">Cerrar sesión</a>
   
   <p>Esta información es sólo para usuarios registrados.</p>
   
   <a href="reguserswelcome.php">Volver</a>
    
</body>
</html>