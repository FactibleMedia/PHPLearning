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
    
        include("connection.php");
        
        if(!isset($_POST["updatereg"])) {
            
            $id = $_GET["Id"];
            $fname = $_GET["fnam"];
            $lname = $_GET["lnam"];
            $address = $_GET["Dir"];    
            
        } else {
            
            $id = $_POST["id"];
            $fname = $_POST["fnam"];
            $lname = $_POST["lnam"];
            $address = $_POST["address"];
            
            $db_query = "UPDATE users_data SET fname=:names, lname=:lnames, address=:addresses WHERE id=:idf";
            
            $result = $connection->prepare($db_query);
            
            $result->execute(array(":idf"=>$id, ":names"=>$fname, ":lnames"=>$lname, ":addresses"=>$address));
            
            header("Location:index.php");
        }
    ?>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="updform" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="text" name="fnam" value="<?php echo $fname ?>">
        <input type="text" name="lnam" value="<?php echo $lname ?>">
        <input type="text" name="address" value="<?php echo $address ?>">
        <input type="submit" name="updatereg" value="Actualizar">
    </form>
    
</body>
</html>