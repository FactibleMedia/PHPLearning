<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POO - Clases</title>
</head>
<body>
    <?php
    
        include("vehiculos.php");
    
        $Audi = new Coche(); // Ejemplo de Instancia de la clase "Coche". Con esto se le da un estado inicial al objeto o instancia de ese objeto.
    
        $TruckBMW = new Camion();
    
        $CarBMW = new Coche;
    
        $AlfaRomeo = new Coche; // No es necesario cuando se crea una instancia que lleve los paréntesis que contienen atributos si el constructor no tiene argumentos o atributos dentro de sus paréntesis.
    
        
        $TruckBMW->girar(); // Hacemos una llamada a un método dentro de la clase para que el objeto o instancia realice esa tarea.
    
        echo "El camión BMW tiene " . $TruckBMW->llantas . " llantas <br><br>"; // Hacemos una llamada una propiedad del objeto o instancia dentro de la clase, el "echo" es para que responda cual es el valor de la propiedad.
    
        echo "El auto BMW tiene " . $CarBMW->llantas . " llantas <br><br>"; // Hacemos una llamada una propiedad del objeto o instancia dentro de la clase, el "echo" es para que responda cual es el valor de la propiedad.
    
        $Audi->set_color("Negro", "Audi");
    
        $AlfaRomeo->set_color("Azul", "Alfa Romeo");
    
        $kawasaki = new Moto; // Nueva Instancia a partir de una clase heredada
    
        $kawasaki->arrancar(); // 
    
        $kawasaki->set_color("Negro", "Kawasaki");
    
    ?>
</body>
</html>