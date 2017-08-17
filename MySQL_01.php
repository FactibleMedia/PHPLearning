<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MYSQL - Conexión BD</title>
    
    
    <style>
        table { background-color: black; margin: auto; }
        td { border: 1px solid black; width: 120px; background-color: #fff; font-family: 'Consolas', Arial, sans-serif; }
    </style>
</head>
<body>
    <?php
        
        // Conectarse a PHPmyAdmin con xampp en la terminal: cd /Applications/XAMPP/xamppfiles/bin;./mysql --user=root --password= 
    
        require("MySQL_connection.php");
    
        // Conexión por Procedimientos
    
        $db_connect = mysqli_connect($db_host, $db_user, $db_pass); // Conexión a la bd
        
        if(mysqli_connect_errno()){ // La funciòn mysqli_connect_errno se ejecuta cuando la conexión no es exitosa
            
            echo "Fallo al conectar con la Base de Datos";
            
            exit();    // La función exit sirve para salir del código actual o terminarlo.
        }
    
        mysqli_select_db ($db_connect, $db_name) or die ("No se encuentra la Base de Datos"); // Conecta y selecciona una BD
    
        mysqli_set_charset($db_connect, "utf8"); // Permite usar la codificación UTF8 para mostrar caracteres latinos en el navegador al consultar la BD.
    
        $db_query = "SELECT * FROM productos WHERE Importado='Verdadero'"; // Sentencia de consulta a la bd con Mysql
    
        $db_qresults = mysqli_query($db_connect, $db_query); // result set / record set.
        
        while($row=mysqli_fetch_row($db_qresults)) { // Leer y mostrar en pantalla el Array del result set hasta que no encuentre datos. Quiere decir que mostrará todos los datos de la base de datos.
        
            echo "<table><tr>";
            echo "<td>" . $row[0] . "</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "<td>" . $row[3] . "</td>";
            echo "<td>" . $row[4] . "</td>";
            echo "<td>" . $row[5] . "</td>";
            echo "<td>" . $row[6] . "</td>";
            echo "</tr></table>";
        }
    
        mysqli_close($db_connect);
        
        // CREATE TABLE PRODUCTOS
        
    ?>
</body>
</html>
    

    