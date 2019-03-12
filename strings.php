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
        $resultado = strcmp($variable1, $variable2);
    
        //strcmp compara si son distintas incluyendo las mayúsculas.
        //strcasecmp compra sin son distintas indiferentemente de las mayúsculas.
    
        if($resultado) {
            echo "El resultado de la comparación arrioja que NO es igual o NO coincide, la condición strcmp es verdadera";
        }else{
            echo "El resultado de la comparación arroja que es Igual o Coincide, la condición es strcmp es falsa";
        }
    
        // echo "El resultado es $resultado";
        
    
    ?>
    
</body>
</html>