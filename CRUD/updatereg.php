<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <style>
        
        body {
            font-family: 'Consolas', Arial, sans-serif;
        }
        
        h1 {
            text-align: center;
            font-size: 2em;
            letter-spacing: 3px;
            margin-bottom: 20px;
        }
        
        h2 {
            text-align: center;
            font-size: 1em;
            margin: 0;
        }
        
        input[type=submit] {
            background-color: green;
            color: #ffffff;
            font-weight: 600;
            border: none;
            border-radius: 4px;
            padding: 4px 10px;
        }
        
        
        form {
            text-align: center;
            margin: 0 auto 20px auto;
        }
        
        form input {
            margin-bottom: 4px;
            font-family: 'Consolas', Arial, sans-serif;
        }
        
    </style> 
    
</head>
<body>
  
  <h1>Actualizar Registro</h1>
   
   <?php
    
        include("connection.php"); // Llamamos a la conexión
        
        if(!isset($_POST["updatereg"])) { // Creamos un if para decirle que si no ha presionado el boton de actualizar capture los datos que se han pasado por la url a través del botón actualizar de la página index por el método GET.
            
            $id = $_GET["Id"];
            $fname = $_GET["fnam"];
            $lname = $_GET["lnam"];
            $address = $_GET["Dir"];    
            
        } else { // Si ha presionado el botón actualizar también llama los datos que se han pasado por la url pero en este caso se hace una consulta de editar o actualizar esos datos en la url por el método POST...
            
            $id = $_POST["id"];
            $fname = $_POST["fnam"];
            $lname = $_POST["lnam"];
            $address = $_POST["address"];
            
            $db_query = "UPDATE users_data SET fname=:names, lname=:lnames, address=:addresses WHERE id=:idf";
            
            $result = $connection->prepare($db_query); // Luego preparamos esa consulta.
            
            $result->execute(array(":idf"=>$id, ":names"=>$fname, ":lnames"=>$lname, ":addresses"=>$address)); //Ejecutamos la consulta y le pasamos los datos a actualizar a los marcadores que se encuentran dentro del array.
            
            header("Location:index.php"); // Redirigimos a la página index con el dato actualizado.
        }
    ?>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="updform" method="post"> <!-- Cuando se pulse el botón de actualizar enviamos los datos del formulario, en este caso lo enviamos a la misma página. -->
        <input type="hidden" name="id" value="<?php echo $id ?>"> <!-- Incluimos dentro del input como un dato de vista de placeholder o value el dato correspondiente que se va actualizar -->
        <input type="text" name="fnam" value="<?php echo $fname ?>">
        <input type="text" name="lnam" value="<?php echo $lname ?>">
        <input type="text" name="address" value="<?php echo $address ?>">
        <input type="submit" name="updatereg" value="Actualizar">
    </form>
    
</body>
</html>