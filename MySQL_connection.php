<?php
    
    // Conectarse a PHPmyAdmin con xampp en la terminal: cd /Applications/XAMPP/xamppfiles/bin;./mysql --user=root --password= 

    //Si el servidor no arranca colocar:  sudo /Applications/XAMPP/xamppfiles/bin/mysql.server start
        
    // Para conectarse a una base de datos se capturan los datos de la base de datos
        
    $db_host="localhost";
    $db_name="phplearn_users";
    $db_user="root";
    $db_pass="";


    /* $connection = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
    
    $query = "select * from user_data";

    $results = mysqli_query($connection, $query);

    $data = mysqli_fetch_row($results);
    
    echo $data[0] . " ";
    echo $data[1] . " ";
    echo $data[2] . " ";
    echo $data[3] . " "; */

?>