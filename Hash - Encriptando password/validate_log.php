<?php

try {
    
    $user = htmlentities(addslashes($_POST["user"]));
    $pass = htmlentities(addslashes($_POST["pass"]));

    $counter = 0;

    $connection = new PDO("mysql:host=localhost; dbname=phplearn_users", "root", "");

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db_query = "SELECT * FROM user_access WHERE USERS = :user";

    $preparation = $connection->prepare($db_query);

    $preparation->execute(array(":user"=>$user));

    while($register=$preparation->fetch(PDO::FETCH_ASSOC)) {
        
        //echo "Usuario: " . $register['USERS'] . " Contraseña: " . $register['PASS'] . "<br>";
        
        if (password_verify($pass, $register['PASS'])) {
            
          $counter++;
            
        }
        
    }
    
    if ($counter>0) {
        
        echo "Usuario registrado :)";
        
    } else {
        
        echo "¡Usuario no registrado!!!";
        
    }

    $preparation->closeCursor();
    
} catch(Exception $e) {
    
    die("Error: " . $e->getMessage());
    
}


?>