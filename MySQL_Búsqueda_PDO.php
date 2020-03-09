<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Búsqueda por Método PDO</title>
    
</head>
<body>
    <?php
    
        $search = $_GET["search"];
    
        try {

            $base = new PDO ("mysql:host=localhost; dbname=phplearn_users", "root", "");
            
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $base->exec("SET CHARACTER SET utf8");
            
            $bd_query = "SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM productos WHERE NOMBREARTÍCULO = ?";
            
            $bd_result = $base->prepare($bd_query); // Almacenado el PDO Statement (PHP Data Object Statement).
            
            $bd_result->execute(array($search));
            
            while($register=$bd_result->fetch(PDO::FETCH_ASSOC)) {
                
                echo "Nombre artículo: " . $register['NOMBREARTÍCULO'] . " Sección: " . $register['SECCIÓN'] . " Precio: " . $register['PRECIO'] . " Origen. " . $register['PAÍSDEORIGEN'] . "</br>";
                
            }
            
            $bd_result->closeCursor();
            
        } catch (Exception $e) {
            
            die("Error" . $e->GetMessage());
            
        } finally {
            
            $base = null;
            
        }
    
    ?>    
</body>
</html>
    

