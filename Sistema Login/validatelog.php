<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    
        try {
            
            $connection = new PDO("mysql:host=localhost; dbname=phplearn_users", "root", "");
            
        } catch(Exception $e) {
            
            die("Error: " . $e->getMessage());
            
        }
    ?>
    
</body>
</html>