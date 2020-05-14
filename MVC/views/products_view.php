  
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
