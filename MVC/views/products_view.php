<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
    <table>
        <tr>
            <td>Artículo</td>   
    
    <?php
                
        foreach($products_array as $register) {
            
            echo "<tr><td>" . $register["NOMBREARTÍCULO"] . "</tr></td>";
            
        }
        
    ?>
    
        </tr>
    </table>
</body>
</html>