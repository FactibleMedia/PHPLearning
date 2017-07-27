<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejemplos de Funciones Predefinidas</title>
</head>
<body>
    <?php
    
        $name = "Fez";
    
        echo (strtolower($name));
    
        
        function suma($num1, $num2) {
            
            $num1 = 3;
            
            $num2 = "2";
            
            $resultado = $num1 + $num2;
            
            return $resultado;
            
        }
    
        suma(2,3);
;    
    ?>
</body>
</html>