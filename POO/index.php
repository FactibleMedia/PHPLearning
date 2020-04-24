<?php
    
    require "consultaproductos.php";

    $pais = $_GET["buscar"];
        
    $productos = new showproducts();

    $array_products = $productos->get_products($pais);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consulta de Productos | POO</title>
    
    <style>
        form { text-align: center; }
        table { background-color: darkblue; margin: auto; border-collapse: collapse;}
        td { border: 1px solid green; color: #fff; font-family: 'Consolas', Arial, sans-serif;font-size: 14px; padding: 4px 10px; background-color: darkblue; border-collapse: collapse; }
         ¿
    </style>
</head>
<body>
    
    <?php
    
        echo "<table><tr><td>SERIAL</td><td>SECCIÓN</td><td>ITEM</td><td>PRECIO</td><td>FECHA</td><td>IMPORTADO</td><td>PAÍS</td><td>FOTO</td></tr>";
        
        foreach($array_products as $elements) {
            
            echo "<td>" . $elements['CÓDIGOARTÍCULO'] . "</td>";
            echo "<td>" . $elements['SECCIÓN'] . "</td>";
            echo "<td>" . $elements['NOMBREARTÍCULO'] . "</td>";
            echo "<td>" . $elements['PRECIO'] . "</td>";
            echo "<td>" . $elements['FECHA'] . "</td>";
            echo "<td>" . $elements['IMPORTADO'] . "</td>";
            echo "<td>" . $elements['PAÍSDEORIGEN'] . "</td>";
            echo "<td>" . $elements['FOTO'] . "</td>
            </tr>";
            
        }
    
        echo "</table>"
    
    ?>
    
</body>
</html>