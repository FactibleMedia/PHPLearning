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

            $db_query = "SELECT * FROM productos WHERE nombrearticulo LIKE '%$searchs%'"; // Sentencia de consulta a la bd con Mysql

            $db_qresults = mysqli_query($db_connect, $db_query); // result set / record set.

            echo "<table>";

            while($row=mysqli_fetch_row($db_qresults)) { // Leer y mostrar en pantalla el Array del result set hasta que no encuentre datos. Quiere decir que mostrará todos los datos de la base de datos. 

                echo "<tr>";    

                for($i=0;$i<count($row);$i++){ // Recorriendo el Array
                    $table_data=strtolower($row[$i]); // Pasando los datos del array a minúsculas
                    echo "<td>" . ucwords($table_data) . "</td>"; // Mostrando los datos del Array y pasándolos a letra capital
                };

                echo "</tr>";
            }

            echo "</table>";

            mysqli_close($db_connect); 
        }
        
    ?>