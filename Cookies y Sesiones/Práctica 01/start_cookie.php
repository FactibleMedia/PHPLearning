<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
        // setcookie("selected_lang", $_GET["language"], time()+86400);

        setcookie("selected_lang", $_GET["language"], strtotime('+30 days')); // Es mejor este método para establecer la duración de la cookie.
    
        header("Location:look_cookie.php");
    
    ?>
</body>
</html>