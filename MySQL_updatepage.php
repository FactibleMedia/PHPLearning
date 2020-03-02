<style>
        form { text-align: center; }
        table { background-color: darkblue; margin: auto; border-collapse: collapse;}
        td { border: 1px solid green; color: #fff; font-family: 'Consolas', Arial, sans-serif;font-size: 14px; padding: 4px 10px; background-color: darkblue; border-collapse: collapse; }
        
    </style>
       
       <?php
        
        // Conectarse a PHPmyAdmin con xampp en la terminal: cd /Applications/XAMPP/xamppfiles/bin;./mysql --user=root --password= 

        function execute_query($searchs) {
    
            require("MySQL_connection.php");

            // Conexión por Procedimientos

            $db_connect = mysqli_connect($db_host, $db_user, $db_pass); // Conexión a la bd

            if(mysqli_connect_errno()){ // La funciòn mysqli_connect_errno se ejecuta cuando la conexión no es exitosa

                echo "Fallo al conectar con la Base de Datos";

                exit();    // La función exit sirve para salir del código actual o terminarlo.
            }

            mysqli_select_db ($db_connect, $db_name) or die ("No se encuentra la Base de Datos"); // Conecta y selecciona una BD

            mysqli_set_charset($db_connect, "utf8"); // Permite usar la codificación UTF8 para mostrar caracteres latinos en el navegador al consultar la BD.
            
            //----------------------------------------------------------------

            $db_query = "SELECT * FROM productos WHERE nombreartículo LIKE '%$searchs%'"; // Sentencia de consulta a la bd con Mysql

            $db_qresults = mysqli_query($db_connect, $db_query); // result set / record set.

            // echo "<table><tr><td>SERIAL</td><td>SECCIÓN</td><td>ITEM</td><td>PRECIO</td><td>FECHA</td><td>IMPORTADO</td><td>PAÍS</td><td>FOTO</td></tr>";
            
            while($row=mysqli_fetch_assoc($db_qresults)) {
                
                echo "<form action='MySQLupdates.php' method='get'>";
            
                echo "<input type='text' name='id' value='" . $row["CÓDIGOARTÍCULO"] . "'><br>";

                echo "<input type='text' name='art' value='" . $row["NOMBREARTÍCULO"] . "'><br>";

                echo "<input type='text' name='sec' value='" . $row["SECCIÓN"] . "'><br>";

                echo "<input type='text' name='imp' value='" . $row["IMPORTADO"] . "'><br>";

                echo "<input type='text' name='price' value='" . $row["PRECIO"] . "'><br>";

                echo "<input type='text' name='date' value='" . $row["FECHA"] . "'><br>";

                echo "<input type='text' name='origin' value='" . $row["PAÍSDEORIGEN"] . "'><br>";

                echo "<input type='submit' name='enviando' value='Actualizar'>";

                echo "</form>";

                /*echo "<tr>";    

                for($i=0;$i<count($row);$i++){ // Recorriendo el Array
                    $table_data=mb_strtolower($row[$i]); // Pasando los datos del array a minúsculas
                    echo "<td>" . ucwords($table_data) . "</td>"; // Mostrando los datos del Array y pasándolos a letra capital
                };

                echo "</tr>"; */
            }

            //echo "</table>"; 

            mysqli_close($db_connect);
        }

        // execute_query("CENICERO");
        
    ?>