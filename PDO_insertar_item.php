<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insertar Registro PDO</title> 
    
</head>
<body>
    <?php
    
        $id = $_POST["id"];
        $sec = $_POST["sec"];
        $item = $_POST["item"];
        $price = $_POST["price"];
        $date = $_POST["date"];
        $imp = $_POST["imp"];
        $madein = $_POST["madein"];
    
        try {

            $base = new PDO ("mysql:host=localhost; dbname=phplearn_users", "root", "");
            
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $base->exec("SET CHARACTER SET utf8");
            
            //$bd_query = "SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM productos WHERE NOMBREARTÍCULO = ?";
            
            $bd_query = "INSERT INTO productos (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA, IMPORTADO, PAÍSDEORIGEN) VALUES (:mkr_id, :mkr_sec, :mkr_item, :mkr_price, :mkr_date, :mkr_imp, :mkr_madein)";
            
            $bd_result = $base->prepare($bd_query); // Almacenado el PDO Statement (PHP Data Object Statement).
            
            $bd_result->execute(array(":mkr_id"=>$id, ":mkr_sec"=>$sec, ":mkr_item"=>$item, ":mkr_price"=>$price, ":mkr_date"=>$date, ":mkr_imp"=>$imp, ":mkr_madein"=>$madein));
            
            echo "Registro Insertado con éxito";
            
            $bd_result->closeCursor();
            
        } catch (Exception $e) {
            
            die("Error" . $e->GetMessage());
            
        } finally {
            
            $base = null;
            
        }
    
    ?>    
</body>
</html>
    

