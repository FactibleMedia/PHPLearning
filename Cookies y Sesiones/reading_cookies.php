<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leyendo una Cookie</title>
</head>
<body>
    
    <?php
    
        if(isset($_COOKIE["Cookie_0A"])) {
            
            echo $_COOKIE["Cookie_0A"];
            
        } else {
        
            echo "La Cookie no se ha creado";
            
        }
    
        
    
    ?>
    
    
</body>
</html>