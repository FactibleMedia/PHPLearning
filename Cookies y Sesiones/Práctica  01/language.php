<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido | Escoja su idioma</title>
    
    <style>
        
        h1 { text-align: center; }
        
        div {
            margin: auto;
            text-align: center;
        }
        
        div img {
            width: 64px;
            margin: 0 10px;
        }
        
    </style>
</head>
<body>
   
    <?php
        
        if(isset($_COOKIE["selected_lang"])) {
            
            if($_COOKIE["selected_lang"]=="es") {
                
                header("Location:spanish.php");
                
            } else if($_COOKIE["selected_lang"]=="en") {
                
                header("Location:english.php");
                
            }
        }
        
    ?>
    
    <h1>Elija su idioma</h1>
    <div>
        <a href="start_cookie.php?language=es"><img src="img/spain-flag-round-icon-256.png" alt="Español"></a>
        <a href="start_cookie.php?language=en"><img src="img/united-kingdom-flag-round-icon-256.png" alt="Inglés"></a>
    </div>
</body>
</html>