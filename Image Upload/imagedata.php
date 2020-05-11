<?php
    
    $imagename = $_FILES['image']['name']; // Capturamos el nombre de la imagen

    $imagetype = $_FILES['image']['type']; // Capturamos el tipo de imagen
    
    $imagesize = $_FILES['image']['size']; // Capturamos el tamaño de la imagen.

    // echo $_FILES['image']['size']; // Forma de mostrar en pantalla el tamaño.

    if ($imagesize<=3000000) {
        
        if ($imagetype=="image/jpeg" || $imagetype=="image/jpg" || $imagetype=="image/png" || $imagetype=="image/gif") {

            $directory = $_SERVER['DOCUMENT_ROOT'] . '/PHPLearning/Image Upload/uploads/'; // Ruta del directorio de destino en el servidor.

            move_uploaded_file($_FILES['image']['tmp_name'], $directory . $imagename); // La función - move_uploaded_file - sirve para mover la imagen del directorio temporal al directorio seleccionado previamente.
        
            echo "<h3>El archivo se subió correctamente!</h3>";
            echo "<p><b>Nombre:</b> " . $imagename . "</p>";
            echo "<p><b>Tipo:</b> " . $imagetype . "</p>";
            echo "<p><b>Tamaño:</b> " . $imagesize . " bytes</p>";
            echo "<p><b>Destino:</b> " . $directory . "</p>";
            // Forma de mostrar en pantalla el tamaño.
            
            } else {
            
                echo "Sólo se pueden subir imágenes con extensión: .jpeg, .jpg, png o .gif";
            
            }
        
    } else {
        
        echo "El tamaño es demasiado grande o el formato del archivo no corresponde.";
        
    }
    
    require("connection.php");
    
    $connection = mysqli_connect($db_host, $db_user, $db_pass);

    if (mysqli_connect_errno()) {
        
        echo "Fallo al conectar con la base de datos.";
        exit();
        
    }
    
    mysqli_select_db($connection, $db_name) or die ("No se encuantra la base de datos.");

    mysqli_set_charset($connection, "utf8");

    $db_query = "UPDATE productos SET FOTO = '$imagename' WHERE CÓDIGOARTÍCULO = 'AR01'";

    $result = mysqli_query($connection, $db_query);

    
    

?>