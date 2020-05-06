<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paginación</title>
    
    <style>
        body { font-family: 'Consolas', Arial, sans-serif; }
        form { text-align: center; }
        table { background-color: darkblue; margin: auto; border-collapse: collapse;}
        td { border: 1px solid green; color: #fff; font-family: 'Consolas', Arial, sans-serif;font-size: 14px; padding: 4px 10px; background-color: darkblue; border-collapse: collapse; }
    </style>
</head>
<body>
    <?php
    
        try { //1.
            
            $connection = new PDO("mysql:host=localhost; dbname=phplearn_users", "root", ""); // 4.
            
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // 5.
            
            $connection->exec("SET CHARACTER SET utf8"); // 6.
            
            $pagesize=3; // 13. Usamos esta variable para espcificar el número de registros por páginas.
            
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
            
            $db_query="SELECT SECCIÓN, NOMBREARTÍCULO, PRECIO, IMPORTADO, PAÍSDEORIGEN FROM productos WHERE SECCIÓN = 'DEPORTES' "; // 7. Usamos el parámetro -LIMIT- para definir el número de registros que se desean ver, recibe dos datos: el primero es el primer registro que se quiere ver y el segundo es la cantidad de registros que se desea ver.
            
            $result = $connection->prepare($db_query); // 8.
            
            $result->execute(array()); // 9.
            
            $row_cant = $result->rowCount(); // 15. Usamos esta variable para saber la cantidad de líneas/filas(arrays) de los registros.
            
            $totalpages = ceil($row_cant / $pagesize); // 16. Esta variable sirve para calcular el número de páginas. Con la función -ceil- redondeamos el resultado.
            
            //echo "Número de registros: " . $row_cant . "<br>"; // .17
            //echo "Mostramos " . $pagesize . " registros por página <br>";
            //echo "Mostrando la página " . $page . " de " . $totalpages . "<br>";
            
            echo "<br><table><tr><td>SECCIÓN</td><td>ITEM</td><td>PRECIO</td><td>IMPORTADO</td><td>PAÍS</td></tr>"; // 10.
            
            /* while($register=$result->fetch(PDO::FETCH_ASSOC)) { // 11.
                
                echo "<tr>";
                
                echo "<td>" . $register["SECCIÓN"] . "</td><td>" . $register["NOMBREARTÍCULO"] . "</td><td>" . $register["PRECIO"] . "</td><td>" . $register["IMPORTADO"] . "</td><td>" . $register["PAÍSDEORIGEN"] . "</td>";
                
            }
            
            echo "</tr><table>"; */
            
            $result->closeCursor(); // 12. Cerramos la conexión y la consulta.
            
            $db_query_limit = "SELECT SECCIÓN, NOMBREARTÍCULO, PRECIO, IMPORTADO, PAÍSDEORIGEN FROM productos WHERE SECCIÓN = 'DEPORTES' LIMIT $pages_start, $pagesize"; // 18. Creamos una nueva variable donde almacenamos una nueva consulta pero le incluimos las variables al parámetro -LIMIT-
            
            $result = $connection->prepare($db_query_limit); // 20. Se prepara una nueva consulta.
            
            $result->execute(array()); //20
            
            while($register=$result->fetch(PDO::FETCH_ASSOC)) { //20
                
                echo "<tr>";
                
                echo "<td>" . $register["SECCIÓN"] . "</td><td>" . $register["NOMBREARTÍCULO"] . "</td><td>" . $register["PRECIO"] . "</td><td>" . $register["IMPORTADO"] . "</td><td>" . $register["PAÍSDEORIGEN"] . "</td>";
                
            }
            
            echo "</tr></table><br>";
            
        } catch(Exception $e) { // 2.
            
            echo "Línea del error " . $e->getLine(); //3.
            
        }
    
        /// EMPIEZA PAGINACIÓN ///
    
        echo "<div style='text-align:center;'>";
        
        for($i=1; $i<=$totalpages; $i++) { // 21. Creamos la paginación de manera lógica, aumentamos el número de páginas segun el número de registros mostrados por página.
            
            echo "<a href='?page=" . $i . "'>" . $i . "</a> "; //22. Enviamos el número de la página a la URL
            
        }
    
        echo "</div>";
        
    ?>
</body>
</html>