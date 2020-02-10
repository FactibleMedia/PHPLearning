<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POO - Clases</title>
</head>
<body>
    <?php
    
        echo "<strong>LECCIÓN CLASES</strong>" . "</br></br>";
    
        include("vehiculos.php");
    
        $Audi = new Coche(); // Ejemplo de Instancia de la clase "Coche". Con esto se le da un estado inicial al objeto o instancia de ese objeto.
    
        $TruckBMW = new Camion();
    
        $CarBMW = new Coche;
    
        $AlfaRomeo = new Coche; // No es necesario cuando se crea una instancia que lleve los paréntesis que contienen atributos si el constructor no tiene argumentos o atributos dentro de sus paréntesis.
    
        
        $TruckBMW->girar(); // Hacemos una llamada a un método dentro de la clase para que el objeto o instancia realice esa tarea.
    
    
        echo "El auto BMW tiene " . $CarBMW->llantas . " llantas <br><br>"; // Hacemos una llamada una propiedad del objeto o instancia dentro de la clase, el "echo" es para que responda cual es el valor de la propiedad.
    
        
        echo "El camión BMW tiene " . $TruckBMW->get_llantasCam() . " llantas <br><br>"; // Hacemos una llamada una propiedad del objeto o instancia dentro de la clase a través de un método GETTER (get_llantasCam), el "echo" es para que responda cual es el valor de la propiedad.
    
        $Audi->set_color("Negro", "Audi");
    
        $AlfaRomeo->set_color("Azul", "Alfa Romeo");
    
        $kawasaki = new Moto; // Nueva Instancia a partir de una clase heredada
    
        $kawasaki->arrancar(); // 
    
        $kawasaki->set_color("Negro", "Kawasaki");
    
        echo "la Moto Kawasaki tiene " . $kawasaki->get_llantasCam() . " llantas <br><br><br>"; // Hacemos una llamada una propiedad del objeto o instancia dentro de la clase, el "echo" es para que responda cual es el valor de la propiedad.
    
        
    

    // VARIABLES ESTÁTICAS 
        
        echo "<strong>LECCIÓN VARIABLES ESTÁTICAS</strong>" . "</br></br>";

        
        include("POO_Concesionario.php");
    
        // Compra_vehiculo::$descuento = 600000;
    
        $compra_Fede = new Compra_vehiculo("compacto");
    
        $compra_Fede->climatizador();
    
        $compra_Fede->tapiceria("blanco");
    
        echo "El precio final de la compra para Fede es " . $compra_Fede->precio_final() . "</br></br>";
    
        
        $compra_Ash = new Compra_vehiculo("compacto");
    
        $compra_Ash->climatizador();
    
        $compra_Ash->tapiceria("rojo");
    
        // Compra_vehiculo::$descuento = 1000000;
    
        Compra_vehiculo::descuentoGob(); // A través de ésta sintaxis se accede a un método estático.
    
        function descuentoGob() {
            $desc=550000;
            return $desc;
        }
    
        echo "El precio final de la compra para Ash es " . $compra_Ash->precio_final() . "</br></br></br>";
    
    
    // ARRAYS
    
        echo "<strong>LECCIÓN ARRAYS</strong>" . "</br></br>";
    
        include("POO_Arrays.php");
    
        
        
    ?>
</body>
</html>