<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
        
        //Usamos la librearía PDO para hacer la validación del login. Empezamos con el método try|catch.
    
        try { // Intenta todo el código dentro.
            
            $connection = new PDO("mysql:host=localhost; dbname=phplearn_users", "root", ""); // 1. Creamos una variable para la conexión a través de la librearía y métodos PDO.
            
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Establecemos las propiedades de la conexión y le colocamos los atributos.
            
            $sql_query = "SELECT * FROM user_access WHERE USERS = :users AND PASS = :pass"; // Creamos la consulta a la base de datos y la metemos en una variable. Utilizamos en este caso marcadores de referencia (:users y :pass) para la seguridad de la conexión. 
            
            $preparation = $connection->prepare($sql_query); // Preparamos la consulta. Creamos una variable que es igual a la conexión que llama al método prepare con el parámetro de la consulta almacenado en una variable.
            
            $users = htmlentities(addslashes($_POST["user"])); // Creamos una variable para capturar los datos del formulario; utilizamos - htmlentities - para convertir cualquier símbolo html y la función - addslashes - para anular cualquier carácter extraño en el formulario.
            
            $pass = htmlentities(addslashes($_POST["pass"])); // Creamos una variable para capturar los datos del formulario; utilizamos - htmlentities - para convertir cualquier símbolo html y la función - addslashes - para anular cualquier carácter extraño en el formulario.
            
            $preparation->bindValue(":users", $users); // Para vincular los datos de los marcadores con los datos introducidos en el formulario utilizamos esta vez - bindValue - (en vez de - bindParam -) para unir los marcadores a la consulta.
            
            $preparation->bindValue(":pass", $pass);
            
            $preparation->execute(); // Llamamos a la función - execute() - para ejecutar la consulta preparada. 
            
            $registers = $preparation->rowCount(); // Utilizamos la función -rowCount - para que nos de el número de registros que devuelve una consulta y lo almacenamos en una variable, en esta caso $ - $registers -.
            
            if($registers !=0) { // Comprobamos el número de registros y dependiendo del caso lo redigirá una página u otra.
                
                session_start(); // Función predefinida que crea una sesión.
                
                $_SESSION["liveuser"] = $_POST["user"]; // Utilizamos la variable superglobal - $_SESSION - para almacenar el login del usuario. Identificamos la variable superglobal (livesuer) y la igualamos al dato introducido en el formulario.
                
                header("location:reguserswelcome.php");
                
            } else { // Sino encuentra registros que coincidan no lo deja salir de la página de login donde está el formulario..
                
                header("location:login.php");
                
            }
            
        } catch(Exception $e) { // Sino atrapa el error.
            
            die("Error: " . $e->getMessage()); //Utilizamos una función predefinida - die - para cerrar la conexión y mostrar en pantalla el error en la variable - $e -, podemos usar - getMessage() - o - getLine() - entre otras para mostrar en pantalla diferentes formas de mostrar un error.
            
        }
    ?>
    
</body>
</html>