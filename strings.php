<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
        $variable1 = "fez";
        $variable2 = "FEZ";
        $resultado = strcasecmp($variable1, $variable2);
    
        //strcmp compara si son distintas incluyendo las mayúsculas.
        //strcasecmp compra sin son distintas indiferentemente de las mayúsculas.
    
        if($resultado) {
            echo "La comparación NO Coincide, la condición es verdadera";
        }else{
            echo "La comparación Coincide, la condición es falsa";
        }
    
        // echo "El resultado es $resultado";
        
    
    ?>
    
</body>
</html>