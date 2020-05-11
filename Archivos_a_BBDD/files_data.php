<?php
    
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];

    if ($file_size<=3000000) {

        $directory = $_SERVER['DOCUMENT_ROOT'] . '/PHPLearning/Archivos_a_BBDD/uploads/';

        move_uploaded_file($_FILES['file']['tmp_name'], $directory . $file_name);
        
        echo "<h3>El archivo se subió correctamente!</h3>";
        echo "<p><b>Nombre:</b> " . $file_name . "</p>";
        echo "<p><b>Tipo:</b> " . $file_type . "</p>";
        echo "<p><b>Tamaño:</b> " . $file_size . " bytes</p>";
        echo "<p><b>Destino:</b> " . $directory . "</p>";
        
    } else {
        
        echo "El tamaño es demasiado grande.";
        
    }
    
    require("connection.php");
    
    $connection = mysqli_connect($db_host, $db_user, $db_pass);

    if (mysqli_connect_errno()) {
        
        echo "Fallo al conectar con la base de datos.";
        exit();
        
    }
    
    mysqli_select_db($connection, $db_name) or die ("No se encuentra la base de datos.");

    mysqli_set_charset($connection, "utf8");

    $target_file = fopen($directory . $file_name, "r" );

    $file_content = fread($target_file, $file_size);

    $file_content = addslashes($file_content);

    fclose($target_file);

    $db_query = "INSERT INTO files (id, name, type, content) VALUES (0, '$file_name', '$file_type', '$file_content')";

    $result = mysqli_query($connection, $db_query);

    if(mysqli_affected_rows($connection)>0) {
        
        echo "Se ha guardado el archivo en la BBDD";
        
    } else {
        
        echo "No se ha podido guardar el archivo en la BBDD";

    }
    
    
?>