<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conexiòn a BD por Método PDO</title>
    
    <style>
        form { text-align: center; }
        table { background-color: darkblue; margin: auto; border-collapse: collapse; }
        td { border: 1px solid green; color: #fff; font-family: 'Consolas', Arial, sans-serif;font-size: 14px; padding: 4px 10px; background-color: darkblue; border-collapse: collapse; }
        
</style>
</head>
<body>
    <?php
    
        try {

            $base = new PDO ("mysql:host=localhost; dbname=phplearn_users", "root", "");
            
            echo "Conectado exitosamente";
            
        } catch (Exception $e) {
            
            die("Error" . $e->GetMessage());
            
        } finally {
            
            $base = null;
            
        }
    
    ?>    
</body>
</html>
    

