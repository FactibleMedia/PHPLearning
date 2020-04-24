<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insertar Registro PDO</title>
    
</head>
<body>
    <?php
    
        $id = $_POST["id"];
    
        try {

            $base = new PDO ("mysql:host=localhost; dbname=phplearn_users", "root", "");
            
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $base->exec("SET CHARACTER SET utf8");
            
            //$bd_query = "SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM productos WHERE NOMBREARTÍCULO = ?";
            
            $bd_query = "DELETE FROM productos WHERE CÓDIGOARTÍCULO = :mkr_id";
            
            $bd_result = $base->prepare($bd_query); // Almacenado el PDO Statement (PHP Data Object Statement).
            
            $bd_result->execute(array(":mkr_id"=>$id));
            
            echo "Registro Eliminado con éxito";
            
            $bd_result->closeCursor();
            
        } catch (Exception $e) {
            
            die("Error" . $e->GetMessage());
            
        } finally {
            
            $base = null;
            
        }
    
    ?>    
</body>
</html>
    

