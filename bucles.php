<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bucles</title>
</head>
<body>
    <?php
        
        $var1=0;
    
        /* while($var1<50) { // Bucle indeterminado WHILE
            echo $var1 . "</br>";
            $var1+=5;   
        }
        echo "Hemos salido del bucle"; */
    
        /* do { // Bucle indeterminado DO WHILE
            echo $var1 . "</br>";
            $var1++;
        } while ($var1<10);
    
        echo "Hemos salido del bucle"; */
        
        for($i=10;$i>=-10;$i--) {
            
            //echo "<strong>Cynthia</strong> está muy peresoza ya ni se quiere peinar la cabeza! </br>"; // Bucle
        
            if ($i==0) { // Este if es creado para insertar una condición dentro del blucle.
                echo "La división por 0 (cero) es imporsible </br>";
                continue; // Con esta instrucción se le da continuidad al bucle. En el caso contrario sería la instrucción "break" para interrumpir el funcionamiento del bucle.
            } 
            
            echo "9 / $i = " . 9/$i . "</br>"; // Tabla de multiplicar del 9    
         }
    
        // *NOTA: Los bucles siempre se deben detener.
    ?>
</body>
</html>