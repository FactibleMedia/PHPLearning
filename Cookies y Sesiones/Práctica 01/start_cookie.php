<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
        setcookie("selected_lang", $_GET["language"], time()+86400);
    
        header("Location:look_cookie.php");
    
    ?>
</body>
</html>