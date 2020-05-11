<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver Imagen</title>
</head>
<body>
    <?php
    
        require("connection.php");
    
        $connection = mysqli_connect($db_host, $db_user, $db_pass);

        if (mysqli_connect_errno()) {

            echo "Fallo al conectar con la base de datos.";
            exit();

        }

        mysqli_select_db($connection, $db_name) or die ("No se encuantra la base de datos.");

        mysqli_set_charset($connection, "utf8");

        $db_query = "SELECT FOTO FROM productos WHERE CÓDIGOARTÍCULO='AR01'";

        $result = mysqli_query($connection, $db_query);
    
        while ($row=mysqli_fetch_array($result)) {
            
            $img_directory = $row["FOTO"];
            

        }

        // mysqli_close($connection);
    
    ?>
    
    <div>
        
        <img src="/PHPLearning/Image Upload/uploads/<?php echo $img_directory; ?>" alt="Primera Imagen" width="50%">
        
    </div>
</body>
</html>