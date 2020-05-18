<?php

    include_once("../model/publication_model.php");

    include_once("../model/handle_data_model.php");

    
    try {
        
        $connection = new PDO('mysql:host=localhost; dbname=blog_bbdd', 'root', '');
        
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
        if($_FILES['imaged']['error']) {
            
            switch ($_FILES['imaged']['error']){
                    
                case 1:
                    echo "El tamaño excede los límites del servidor";
                    break;
                    
                case 2:
                    echo "El tamaño del archivo excede los 2Mb";
                    break;
                    
                case 3:
                    echo "La subida fue interrumpida";
                    break;
                    
                case 4:
                    echo "No se ha enviado ningun archivo";
                    break;
                    
            }
            
        } else {
            
            echo "¡Entrada publicada exitosamente! </br>";
            
            if (isset($_FILES['imaged']['name']) && ($_FILES['imaged']['error'] == UPLOAD_ERR_OK)) {
                
                $path_destiny = "../img/";
                
                move_uploaded_file($_FILES['imaged']['tmp_name'], $path_destiny . $_FILES['imaged']['name']);
                
                echo "El archivo <strong>" . $_FILES['imaged']['name'] . "</strong> se ha copiado en el directorio de imágenes.";
                
            } else {
                
                echo "El archivo no se ha podido mover al directorio de imágenes.";
                
            }
            
        }
        
    $handlePublications = new Handle_publications($connection);
        
    $blogPublication = new Publication_object();
        
    $blogPublication->set_title(htmlentities(addslashes($_POST["title"]), ENT_QUOTES));
        
    $blogPublication->set_date(Date("Y-m-d H:i:s"));
    
    $blogPublication->set_content(htmlentities(addslashes($_POST["content"]), ENT_QUOTES));
        
    $blogPublication->set_image($_FILES["imaged"]["name"]);
        
    // ---- 
        
    $handlePublications->set_Publications($blogPublication);
        
    echo "<br> Entrada agregada con éxtito!";
        
        
    } catch(exception $e) {
        
        die("Error: " . $e->getMessage());
        
    }
    
?>


<a href="../form_post.php">Añadir una nueva entrada</a>
    
<a href="../blog.php">Ir al Blog</a>