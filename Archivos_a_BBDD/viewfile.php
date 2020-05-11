<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver Imagen</title>
</head>
<body>
    <?php
    
        $id = "";
        $type = "";
        $content = "";
    
        require("connection.php");
    
        $connection = mysqli_connect($db_host, $db_user, $db_pass);

        if (mysqli_connect_errno()) {

            echo "Fallo al conectar con la base de datos.";
            exit();

        }

        mysqli_select_db($connection, $db_name) or die ("No se encuantra la base de datos.");

        mysqli_set_charset($connection, "utf8");

        $db_query = "SELECT * FROM files WHERE id = 30";

        $result = mysqli_query($connection, $db_query);
    
        while ($row=mysqli_fetch_array($result)) {
            
            $id = $row["id"];
            $name = $row["name"];
            $type = $row["type"];
            $content = $row["content"];            

        }

        echo "<p>ID: " . $id . "<br></p>";
        echo "<p>NOMBRE: " . $name . "<br></p>";
        echo "<p>TIPO: " . $type . "<br></p>";
        echo "<p>IMG:</p>";
        echo "<img src='data:image/jpeg; base64," . base64_encode($content) . "' width='50%'>";
    
    ?>
    
</body>
</html>