<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    
    <?php
    
        $connection = mysqli_connect("localhost", "root", "", "blog_bbdd");
    
        if (!$connection) {
            echo "La conexión ha fallado" . mysqli_error();
            exit();
        }
    
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
                
                $path_destiny = "img/";
                
                move_uploaded_file($_FILES['imaged']['tmp_name'], $path_destiny . $_FILES['imaged']['name']);
                
                echo "El archivo <strong>" . $_FILES['imaged']['name'] . "</strong> se ha copiado en el directorio de imágenes.";
                
            } else {
                
                echo "El archivo no se ha podido mover al directorio de imágenes.";
                
            }
            
        }
    
        $title = $_POST['title'];
        $content = $_POST['content'];
        $date = date("y-m-d H:i:s");
        $image = $_FILES['imaged']['name'];
        
        $bd_query = "INSERT INTO content (title, date, content, image) VALUES ('" . $title . "', '" . $date . "', '" . $content . "', '" . $image . "')";
        
        $result = mysqli_query($connection, $bd_query);
    
        mysqli_close($connection);
    
        echo "</br> ¡Se ha agregado el comentario con éxito! <br>";
    ?>
    
    <a href="form_post.php">Añadir una nueva entrada</a>
    
    <a href="blog.php">Ir al Blog</a>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
