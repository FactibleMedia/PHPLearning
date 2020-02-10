<?php
        
    // Sintáxis de un array indexado
    /* $semana[]="Lunes";
    $semana[]="Martes";
    $semana[]="Miércoles"; */
    // Fin  Sintáxis de un array

    $semana=array("Lunes", "Martes", "Miércoles", "Jueves"); // Otra opción para la Sintáxis de un array indexado

    $datos=array("Nombre"=>"Fede","Apellido"=>"Martínez","Edad"=>"36"); //Sintáxis de un array asociativo.

    $datos["País"]="Colombia"; // Agregando un elemento más a un array asociativo.

    // $datos="Martín"; // Tener cuidado al nombrar los arrays y variables fijándose que no tengan los mismos nombres.

    /* if(is_array($datos)){ // Método mediante un booleano para comprobar si una variable es un array o no.
        echo "Es un array";
    }else{
        echo "No es un array";
    };*/  

    echo "El día de la semana es el " . $semana[3] . "</br></br>"; // Mostrando en pantalla un array indexado.

    sort($semana); // Sintáxis para ordenar los arrays en orden alfabético.
    
    for($i=0;$i<count($semana);$i++){ //Este bucle sirve para recorrer todos los datos de un array indexado. Lo que hace es  mostrar todos los datos mientras que sean menor que el número de datos que en el momento tenga el array (count($array)).
            
        echo $semana[$i] . "</br></br>"; 
    };
        
    echo "El personaje es " . $datos["Nombre"] . " " . $datos["Apellido"] . "</br></br>"; // Mostrando en pantalla un array asociativo.
    
    foreach($datos as $data=>$personales){ //El bucle "foreach" sirve para recorrer todos los datos de un array asociativo. Lo que hace es asignar una variable para el nombre asociado y otra para asignarle el valor de ese array mientras ejecuta el ciclo a a través de todos los datos.
            
        echo "A $data le corresponde $personales </br></br>";
    };
    
    $alimentos=array("Fruta"=>array("Tropical"=>"Kiwi",
                                    "Cítrico"=>"Mandarina", 
                                    "Otros"=>"Manzana"), // ARRAY DE 2 DIMENSIONES
                     
                     "Leche"=>array("Animal"=>"Vaca",
                                    "Vegetal"=>"Coco"),
                     
                     "Carne"=>array("Vacuna"=>"Lomo Vaca",
                                    "Porcina"=>"Pata Cerdo")
                    );
    
    echo $alimentos["Carne"]["Vacuna"] . "</br></br>"; //Mostrar elementos específicos de un array en pantalla.
    

    foreach($alimentos as $tipo_alimento => $clase_tipo_alimento) { // Este método es desarrollado para desglosar y mostrar en pantalla un array de 2 dimensiones.Se crean 2 variables para identificar los elementos de la primera y segunda dimensión del array.
        
        echo "El tipo de alimento es $tipo_alimento, sus clases y su procedencia son las siguientes:</br>"; // Llama los elementos de la primera dimensión del array.
        
        while( list($clase_a,$procedencia) = each($clase_tipo_alimento) ) { //Este método sirve para desglosar o mostrar los elementos de la segunda dimensión. Se crean variables/nombres identificativos/as para identificar los elementos de la segunda dimensión.
            
            echo "· La clase de $tipo_alimento es $clase_a y su procedencia es el(la) $procedencia. </br>";
            
        }
        
        echo "</br>";
        
    }

    echo var_dump($alimentos);

    echo "<pre>"; echo var_dump($alimentos); echo "<pre>";
        
    echo var_export($alimentos, true); // La  función predefinida "var_export" es una alternativa al "var_dump"

    highlight_string("<?php\n\$data =\n" . var_export($alimentos, true) . ";\n?>");

?>