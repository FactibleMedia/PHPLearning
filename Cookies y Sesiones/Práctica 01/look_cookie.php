<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <?php
        
        if(!$_COOKIE["selected_lang"]) {
            
            header("Location:language.php");
            
        } else if($_COOKIE["selected_lang"]=="es") {
            
            header("Location:spanish.php");
            
        } else if($_COOKIE["selected_lang"]=="en") {
            
            header("Location:english.php");
        }
    ?>
    
</body>
</html>