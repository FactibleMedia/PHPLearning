<?php

        require("MySQL_connection.php");

        // Conexión por Procedimientos

        $db_connect = mysqli_connect($db_host, $db_user, $db_pass); // Conexión a la bd

        $user = mysqli_real_escape_string($db_connect, $_GET["user"]); 
        $pass = mysqli_real_escape_string($db_connect, $_GET["pass"]); // La función - mysqli_real_escape_string - no admite caracteres epeciales, es decir no los tiene en cuenta para la consulta.

        if(mysqli_connect_errno()){ // La funciòn mysqli_connect_errno se ejecuta cuando la conexión no es exitosa

            echo "Fallo al conectar con la Base de Datos";

            exit();    // La función exit sirve para salir del código actual o terminarlo.
        }

        mysqli_select_db ($db_connect, $db_name) or die ("No se encuentra la Base de Datos"); // Conecta y selecciona una BD
            
        mysqli_set_charset($db_connect, "utf8"); // Permite usar la codificación UTF8 para mostrar caracteres latinos en el navegador al consultar la BD.
            
        //----------------------------------------------------------------

        //$db_query = "SELECT * FROM productos WHERE nombreartículo LIKE '%$searchs%'"; // Sentencia de consulta a la bd con Mysql
            
        $db_query = "DELETE FROM user_data WHERE name = '$user' AND pass = '$pass'";
            
        echo "$db_query <br><br>";

        mysqli_query($db_connect, $db_query);

        if(mysqli_affected_rows($db_connect)>0) {
            
            echo "Registro de Usuario eliminado";
            
        }else{
            
            echo "No hay coincidencias en el registro";
        }

        /*if(mysqli_query($db_connect, $db_query)){
                
            echo "Registro de Usuario eliminado";
        
        }*/

        mysqli_close($db_connect); 
        
?>