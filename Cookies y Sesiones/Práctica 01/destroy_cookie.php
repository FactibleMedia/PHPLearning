<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
        // setcookie("selected_lang", "en", time()-1);

    	setcookie("selected_lang", "en", 1); // Es mejor este método para destruir la cookie en el caso de que el tiempo del cliente este mal.s
    
    ?>
</body>
</html>