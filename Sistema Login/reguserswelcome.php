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
    
        echo "Hola " . $_SESSION["liveuser"] . "<br><br>";
    
    ?>
    
    <a href="endsession.php">Cerrar sesión</a>
   
   <div>
       <h3>Zona de usuarios registrados</h3>
       <a href="reguserswelcome_02.php">Página 2</a>
       <a href="reguserswelcome_03.php">Página 3</a>
       <a href="reguserswelcome_04.php">Página 4</a>
   </div>

    
</body>
</html>