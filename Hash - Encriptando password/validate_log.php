<?php

try {
    
    $user = htmlentities(addslashes($_POST["user"])); 
    $pass = htmlentities(addslashes($_POST["pass"]));//Capturamos los datos en sus variables respectivas.

    $counter = 0; // Introducimos una variable contador para saber si el dato que ingresamos está en la base de datos.

    $connection = new PDO("mysql:host=localhost; dbname=phplearn_users", "root", "");

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db_query = "SELECT * FROM user_access WHERE USERS = :user";

    $preparation = $connection->prepare($db_query);

    $preparation->execute(array(":user"=>$user));

    while($register=$preparation->fetch(PDO::FETCH_ASSOC)) { // Recorremos los datos de la consulta, en este caso de usuarios.
        
        //echo "Usuario: " . $register['USERS'] . " Contraseña: " . $register['PASS'] . "<br>";
        
        if (password_verify($pass, $register['PASS'])) { // Se verifica el password con la función - password_verify -, esta función recibe dos parámetros, la variable donde se rescata el password del formulario y la variable donde está almacenado el password hash que se encuentra en la base de datos. La función -password_verify- nos deveulve true si la comparación de los datos son iguales o false si no son iguales.
            
          $counter++; // Incrementamos la vaiable contador para  
            
        }
        
    }
    
    if ($counter>0) { // Si el contador es mayor que cero ha encontrado mínimo un usuario.
        
        echo "Usuario registrado :)";
        
    } else {
        
        echo "¡Usuario no registrado!!!";
        
    }

    $preparation->closeCursor();
    
} catch(Exception $e) {
    
    die("Error: " . $e->getMessage());
    
}


?>