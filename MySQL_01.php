<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MYSQL - Conexión BD</title>
</head>
<body>
    <?php
        // Conectarse a PHPmyAdmin con xampp en la terminal: cd /Applications/XAMPP/xamppfiles/bin;./mysql --user=root --password= 
        
        // Para conectarse a una base de datos se capturan los datos de la base de datos
        
        $db_host="localhost";
        $db_name="bd_test";
        $db_user="root";
        $db_pass="";
    
        // Conexión por Procedimientos
    
        $db_connect = mysqli_connect($db_host, $db_user, $db_pass); // Conexión a la bd
        
        if(mysqli_connect_errno()){ // La funciòn mysqli_connect_errno se ejecuta cuando la conexión no es exitosa
            
            echo "Fallo al conectar con la Base de Datos";
            
            exit();    // La función exit sirve para salir del código actual o terminarlo.
        }
    
        mysqli_select_db ($db_connect, $db_name) or die ("No se encuentra la Base de Datos"); //
    
        mysqli_set_charset($db_connect, "utf8");
    
        $db_query = "SELECT * FROM datos_personales"; // Sentencia de consulta a la bd con Mysql
    
        $db_qresults = mysqli_query($db_connect, $db_query); // result set.
        
        while($row=mysqli_fetch_row($db_qresults)) { // Leer y mostrar en pantalla el Array del result set hasta que no encuentre datos. Quiere decir que mostrará todos los datos de la base de datos.
        
            echo $row[0] . " ";
            echo $row[1] . " ";
            echo $row[2] . " ";
            echo $row[3] . " </br>";
            
        }
    
        mysqli_close($db_connect);

    ?>
</body>
</html>
    

    