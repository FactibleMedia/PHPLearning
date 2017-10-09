<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejemplos de Funciones Predefinidas</title>
</head>
<body>
    <?php
    
        $name = "Fez </br></br>";
    
        echo (strtolower($name)); // Función anidada (En este caso ambas predefinidas) que convierte los strings a minúsculas o en su caso contrario podemos usar strtoupper
    
        
        function suma($num1, $num2) {
            
            $resultado = $num1 + $num2; // Ejemplo de casting de PHP
            
            return $resultado . "</br></br>"; // La función "return" retorna un valor pero no lo devuelve en pantalla
        }
    
        echo suma(5396,8927); // Ejecutando una función con paso de parametros.
    
        
        function frase_mayus($frase, $conversion=true) { // En el segundo parámetro de la función se declara un parámetro/argumento por defecto, no todos los lenguajes soportan esta función.
            
            $frase=strtolower($frase);
            
            if($conversion==true) { // En este caso si el segundo parámetro se cumple ejecutará el if
                
                $resultado = ucwords($frase); // La función "ucwords" convierte a letra capital.
                
            }else{
                
                $resultado = strtoupper($frase); // La función mencionada convierte todo a Upercase
                
            }
            
            return $resultado ."</br></br>"; // Se devuelve el valor
        }
    
        echo frase_mayus("fEdeRicO"); // Se imprime en pantalla la función con un sólo o con los 2 parámetros (El segundo puede ser false, ya que originalmente era true)
    
        
        function incrementa(&$valor1) { // Se declara la función con un argumento por referencia, en este caso el argumento referenciado crea un vínculo con variables o valores externos fuera de la función y además permite que esos valores sean afectados por lo que se encuentra dentro de la función. Si el parámetro se declara por valor el resultado del programa muestra el 6 y luego el 5
            
            $valor1++;
            
            return $valor1 . "</br>";
        }
    
        $numero=5;
    
        echo incrementa($numero) . "</br>";
    
        echo $numero . "</br></br>";
    
    
        function cambiaa_mayus(&$param) {
            
            $param = strtolower($param);
            
            $param = ucwords($param);
            
            return $param;
        }
    
        $cadena = "FEDERICO";
    
        echo cambiaa_mayus($cadena) . "</br></br>";
    
        echo $cadena . "</br>";

    ?>
</body>
</html>