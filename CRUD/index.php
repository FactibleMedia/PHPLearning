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
    
        /* $db_query = $connection->query("SELECT * FROM users_data"); // Se hace la consulta y se almacena en una bd.
    
        $registers = $db_query->fetchAll(PDO::FETCH_OBJ);  Se almacenan los datos de la consulta en una variable como un array de objetos. */
    
        // ------------- /// INICIO PAGINACIÓN /// --------------- //
    
        $pagesize=2; // 13. Usamos esta variable para espcificar el número de registros por páginas.
            
            if(isset($_GET["page"])) { // 23. Sólo ejecuta el bloque si le pasamos el parámetro -page-
            
                if($_GET["page"]==1){ // 22. Rescatamos el dato de la página de la URL
                    
                    header("Location:index.php");
                    
                } else {
                    
                    $page = $_GET["page"];
                    
                }
                
            } else {
                
                $page = 1; // 24. Se pasa acá la variable //14..
                
            }
            
            //$page=1; // 14. Esta variable la usamos para mostrar la página en la que estamos al cargar por primera vez el sitio.
            
            $pages_start = ($page-1)*$pagesize; // 19. Esta instrucción nos ayuda a almacenar en la variable el registro desde el cual quiero empezar a mostrar los resultados que depende de la página donde se esté.
            
            $db_query="SELECT * FROM users_data"; // 7. Usamos el parámetro -LIMIT- para definir el número de registros que se desean ver, recibe dos datos: el primero es el primer registro que se quiere ver y el segundo es la cantidad de registros que se desea ver.
            
            $result = $connection->prepare($db_query); // 8.
            
            $result->execute(array()); // 9.
            
            $row_cant = $result->rowCount(); // 15. Usamos esta variable para saber la cantidad de líneas/filas(arrays) de los registros.
            
            $totalpages = ceil($row_cant / $pagesize); // 16. Esta variable sirve para calcular el número de páginas. Con la función -ceil- redondeamos el resultado.
    
            // ---------------- /// FIN PAGINACIÓN /// ---------------- //
        
    
        $registers = $connection->query("SELECT * FROM users_data LIMIT $pages_start, $pagesize")->fetchAll(PDO::FETCH_OBJ); // Esta línea hace lo mismo que las dos anteriores comentadas.
    
        //---- Insertamos este código de último para instertar nuevos datos.
    
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
            
            foreach($registers as $personas): // EMPIEZA FOREACH
            // Se utiliza el foreach para repetir las líneas de los objetos de la consulta por cada dato de esa consulta.
       
       ?>
       
       <tr>
           <td><?php echo $personas->id ?></td> <!-- Relacionamos los datos de la bd con la variable del foreach. Por cada  objeto persona que hay denrto del array escribe a cada ciclo de bucle el dato correspondiente-->
           <td><?php echo $personas->fname ?></td>
           <td><?php echo $personas->lname ?></td>
           <td><?php echo $personas->address ?></td>
           <td><?php echo $personas->reg_date ?></td>
           
           
           <!-- Despupes de construir los archivos de borrar y actualizar respectivamente. -->
           <td><a href="updatereg.php?Id=<?php echo $personas->id?> & fnam=<?php echo $personas->fname?> & lnam=<?php echo $personas->lname?> & Dir=<?php echo $personas->address?>"><input type="button" name="upd" value="@" class="act"></a></td> <!-- Incluimos la etiqueta como en el botón de borrar pero en este caso pasamos por la url todos los argumentos que queremos cambiar, esto lo hacemos con el símbolo ampersand [&] que es un incluyente lógico. -->
           
           <td><a href="deletereg.php?Id=<?php echo $personas->id?>"><input type="button" name="del" value="X" class="del"></a></td> <!-- incluimos una etiqueta html "a" antes del botón eliminar al que le ponemos un enlace donde llamamos al archivo php de borrado y le pasamos el dato clave id con un interrogante y el nombre de como queremos llamar al parametro, en este caso - Id - y este lo igualamos con un código php que escriba en la url la propiedad - id - del objeto persona que se encuentre evaluando este bucle. -->
           
       </tr>
       
       <?php
            
            endforeach; // TERMINA FOREACH
       
       ?>
   </table><br>
   
   <?php // ---------------- CONTINUA PAGINACIÓN ------------ //
    
        echo "<div style='text-align:center;'>";
        
        for($i=1; $i<=$totalpages; $i++) { // 21. Creamos la paginación de manera lógica, aumentamos el número de páginas segun el número de registros mostrados por página.
            
            echo "<a href='?page=" . $i . "'>" . $i . "</a> "; //22. Enviamos el número de la página a la URL
            
        }
    
        echo "</div>";
    
    // ----------- FIN PAGINACIÓN ----------------- //
    
    ?>
    
</body>
</html>