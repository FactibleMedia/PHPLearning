<?php
    
    $user = $_POST["user"]; // Se capturan los datos en variables
    $pass = $_POST["pass"];
    
    $passhash = password_hash($pass, PASSWORD_DEFAULT, array("cost"=>12)); // La función predefinida - password_hash - nos permire cifrar una clave con el método de encriptación Blowfish, esta función recoge los parámetros: variable de la clave, un parámetro predefinido para crear una clave aleatoria y el costo del cifrado.
    
    try { // Método trycast con varios métodos PDO con marcadores en  consultas preparadas.
        
        $connection = new PDO('mysql: host=localhost; dbname=phplearn_users', 'root', '');
        
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $connection->exec("SET CHARACTER SET utf8");
        
        $db_query = "INSERT INTO user_access (USERS, PASS) VALUES (:user, :pass)";
        
        $preparation = $connection->prepare($db_query);
        
        $preparation->execute(array(":user"=>$user, ":pass"=>$passhash));
        
        echo "Usuario registrado exitosamente";
        
        $preparation->closeCursor();
        
        
    } catch (Exception $e) {
        
        echo "Línea del error: " . $e->getLine();
        
    } finally {
        
        $connection = null;
        
    }
    
?>