<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>Document</title>
    
    <style>
        .resaltado {color: red; font-weight: bold;}
    </style>
</head>
<body>
    <?php
        $nombre = "Fez"; //Variable String  
        $edad = 18; //Variable Número
        print "El nombre del usuario es " . $nombre . ". Esto es concatenación</br>"; //Imprime o muestra un valor en pantalla pero gasta más memoria que un "echo" al retornar un valor de 1 desde la memoria.
        print "y la edad es " . $edad ."</br></br>";        
    
        include ("damelosDatos.php"); //Llama, incluye y ejecuta código desde otros archivos. require hace que sea requerido el archivo de lo contrario pausa el flujo de pl programa.
    
        echo "</br >También podemos decir que.... El nombre del usuario es <strong>$nombre</strong>. Esto es sin concatenación </br></br>"; //Imprime o muestra un valor en pantalla de una manera màs eficiente para la memoria RAM
        
        dameDatos(); //Ejecutar una función expresada
    
        function dameNombre() {
            
            global $nombre; // Permite accesar a una variable por fuera de una función e incluirla en un ámbito local para cambiarla.
                
            $nombre = "Miguel";
        }
    
        dameNombre();
    
        echo $nombre . "</br></br>";
    
        function incrementoValor() {
            
            static $contador = 0; //La variable estática permite que la función guarde el último valor de la variable
            $contador++; //Incremento en 1
            
            echo "<p class='resaltado'>$contador</p>";
        }
    
        incrementoValor();
        incrementoValor();
        incrementoValor();
    ?>
    
    <?php
        
        define("AUTOR","Fez", true); // Nombre de la  constante, el valor de la constante y true o false para decirle que no discrimine si la constante se escribe con mayusculas o minusculas.
        echo "El autor es " . AUTOR ."<br><br><br>";
    ?>
    
</body>
</html>