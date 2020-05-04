<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
    
    <style>
        
        body {
            font-family: 'Consolas', Arial, sans-serif;
        }
        
        h1 {
            text-align: center;
            font-size: 2em;
            letter-spacing: 3px;
            margin-bottom: 0;
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
        
        table { background-color: darkblue; margin: auto; border-collapse: collapse; }
        td, th { border: 1px solid green; color: #fff; font-family: 'Consolas', Arial, sans-serif;font-size: 14px; padding: 4px 10px; background-color: darkblue; border-collapse: collapse; }
        
        td .act, .del {
            background-color: green;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            padding: 2px 10px;
            box-shadow: #000 2px 2px 2px;
            font-weight: 600;
            cursor: pointer;
        }
        
        td .del {
            background-color: red;
        }
        
        td .act:hover, .del:hover {
            box-shadow: #000 -2px -2px 2px;
        }
        
        .campos {
            text-align: center;
            margin: 0 auto 20px auto;
        }
        
        .campos input {
            margin-bottom: 4px;
            font-family: 'Consolas', Arial, sans-serif;
        }
        
    </style> 
    
</head>
<body>
   
   <?php
    
        include("connection.php");
    
        /* $db_query = $connection->query("SELECT * FROM users_data"); // 
    
        $registers = $db_query->fetchAll(PDO::FETCH_OBJ); */
    
        $registers = $connection->query("SELECT * FROM users_data")->fetchAll(PDO::FETCH_OBJ); // 
    
        //----
    
        if(isset($_POST["insert"])) {
            
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $address = $_POST["address"];
            
            $bd_query = "INSERT INTO users_data (fname, lname, address) VALUES (:fnames, :lnames, :addresses)";
            
            $results = $connection->prepare($bd_query);
            
            $results->execute(array(":fnames"=>$fname, ":lnames"=>$lname, ":addresses"=>$address));
            
            header("Location:index.php");
            
        }
    
    ?>
   
   <h1>CRUD</h1>
   <h2>[Create, Read, Update, Delete]</h2> <br>
   
    <form class="campos" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
       <input type="text" name="fname" placeholder="Nombres">
       <input type="text" name="lname" placeholder="Apellidos">
       <input type="text" name="address" placeholder="Dirección">
       <input type="submit" name="insert" value="Insertar Datos">
    </form> <br>
   
   <table>
       <tr>
           <th>ID</th>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Dirección</th>
           <th>Fecha de Registro</th>
           <th colspan="2">Control</th>
       </tr>
       
       <?php
            
            foreach($registers as $personas):
       
       ?>
       
       <tr>
           <td><?php echo $personas->id ?></td>
           <td><?php echo $personas->fname ?></td>
           <td><?php echo $personas->lname ?></td>
           <td><?php echo $personas->address ?></td>
           <td><?php echo $personas->reg_date ?></td>
           <td><a href="updatereg.php?Id=<?php echo $personas->id?> & fnam=<?php echo $personas->fname?> & lnam=<?php echo $personas->lname?> & Dir=<?php echo $personas->address?>"><input type="button" name="upd" value="@" class="act"></a></td>
           <td><a href="deletereg.php?Id=<?php echo $personas->id?>"><input type="button" name="del" value="X" class="del"></a></td>
           
       </tr>
       
       <?php
            
            endforeach;
       
       ?>
   </table>
    
</body>
</html>