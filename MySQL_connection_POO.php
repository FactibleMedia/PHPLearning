<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <style>
        form { text-align: center; }
        table { background-color: darkblue; margin: auto; border-collapse: collapse; }
        td { border: 1px solid green; color: #fff; font-family: 'Consolas', Arial, sans-serif;font-size: 14px; padding: 4px 10px; background-color: darkblue; border-collapse: collapse; }
        
</style>
</head>
<body>
    <?php

        $bd_connect = new mysqli("localhost", "root", "", "phplearn_users");

        if ($bd_connect->connect_errno) {

            echo "Fallo en la conexión a la Base de Datos" . $bd_connect->connect_errno;

        }

        // mysqli_set_charset ($bd_connect, "UTF8"); Estilo procedimental

        $bd_connect->set_charset("utf8"); // Estilo Orientado a Objetos
        
        $bd_query = "SELECT * FROM productos";
        
        // $bd_results =  mysqli_query($bd_connect, $bd_query); Estilo por procedimientos
    
        $bd_results = $bd_connect->query($bd_query);
    
        if($bd_connect->errno) {
            
            die($bd_connect->error);
            
        }
    
        // while($row=mysqli_fetch_assoc($bd_query)) {}
    
        echo "<table><tr><td>SERIAL</td><td>SECCIÓN</td><td>ITEM</td><td>PRECIO</td><td>FECHA</td><td>IMPORTADO</td><td>PAÍS</td><td>FOTO</td></tr>";
    
        while($row=$bd_results->fetch_array()) { // Dependiendo de la función fetch_row o fetch_array se recorre de manera distinta los datos.
            
            echo "<tr>";
            
            echo "<td>" . $row[0] . "</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "<td>" . $row[2] . "</td>";
            echo "<td>" . $row[3] . "</td>";
            echo "<td>" . $row[4] . "</td>";
            echo "<td>" . $row[5] . "</td>";
            echo "<td>" . $row[6] . "</td>";
            echo "<td>" . $row[7] . "</td>";
            
            echo "<tr>";

        }
         echo "</table>";
        echo "Método recorriendo el array (fetch_array/fetch_assoc)";
        
        /*while($row=$bd_results->fetch_row()) { // Dependiendo de la función fetch_row o fetch_array/fetch_assoc se recorre de manera distinta los datos.
            
            echo "<tr>";

            for($i=0;$i<count($row);$i++){ // Recorriendo el Array
                $table_data=mb_strtolower($row[$i]); // Pasando los datos del array a minúsculas
                echo "<td>" . ucwords($table_data) . "</td>"; // Mostrando los datos del Array y pasándolos a letra capital
                
            };
            
            echo "</tr>";
        }
        echo "Método recorriendo las filas (fetch_row)"; */
        $bd_connect->close();
        
    ?>    
</body>
</html>
    

