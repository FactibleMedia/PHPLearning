<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>MYSQL - Conexión BD</title>
    
    
    <style>
        table { background-color: darkblue; margin: auto; border-collapse: collapse;}
        td { border: 1px solid green; color: #fff; font-family: 'Consolas', Arial, sans-serif;font-size: 14px; padding: 4px 10px;}
    </style>
</head>
<body>
    <?php
        
        // Conectarse a PHPmyAdmin con xampp en la terminal de MacOSX: cd /Applications/XAMPP/xamppfiles/bin;./mysql --user=root --password= 
    
        // Conectarse a PHPmyAdmin con xampp en el command de windows: cd yourlocation\xampp\mysql\bin\ 
        // Luego mysql.exe –h localhost –u root -p
    
        require("MySQL_connection.php");
    
        // Conexión por Procedimientos
    
        $db_connect = mysqli_connect($db_host, $db_user, $db_pass); // Conexión a la bd
        
        if(mysqli_connect_errno()){ // La funciòn mysqli_connect_errno se ejecuta cuando la conexión no es exitosa
            
            echo "Fallo al conectar con la Base de Datos";
            
            exit();    // La función exit sirve para salir del código actual o terminarlo.
        }
    
        mysqli_select_db ($db_connect, $db_name) or die ("No se encuentra la Base de Datos"); // Conecta y selecciona una BD
    
        mysqli_set_charset($db_connect, "utf8"); // Permite usar la codificación UTF8 para mostrar caracteres latinos en el navegador al consultar la BD.
    
        //$db_query = "SELECT * FROM phplearn WHERE nombrearticulo LIKE '%'"; // Sentencia de consulta a la bd con Mysql
    
        $db_query = "SELECT * FROM productos WHERE Paísdeorigen = 'Italia'";
    
        $db_qresults = mysqli_query($db_connect, $db_query); // result set / record set.
    
        echo "<table><tr><td>SERIAL</td><td>SECCIÓN</td><td>ITEM</td><td>PRECIO</td><td>FECHA</td><td>IMPORTADO</td><td>PAÍS</td><td>FOTO</td></tr>"; 
        
        while($row=mysqli_fetch_row($db_qresults)) { // Leer y mostrar en pantalla el Array del result set hasta que no encuentre datos. Quiere decir que mostrará todos los datos de la base de datos.
            
            echo "<tr>";    
            
            for($i=0;$i<count($row);$i++){ // Recorriendo el Array
                $table_data=mb_strtolower($row[$i], "UTF-8"); // Pasando los datos del array a minúsculas. Con "strtolower" no se convierten a minúsculas los caracteres de localización com por ejemplo: Ó(con tilde) ó Ä(umlaut-a). Entonces usamos mb_strtolower que usa las propiedades del carácter unicode además que se le puede añadir la codificación o no.
                echo "<td>" . ucwords($table_data) . "</td>"; // Mostrando los datos del Array y pasándolos a letra capital
            };
            
            echo "</tr>";
        }
    
        echo "</table> </br>";
        
    
        $db_qresults = mysqli_query($db_connect, $db_query);
    
        echo "<table>";
        
        while($row=mysqli_fetch_array($db_qresults, MYSQLI_ASSOC)) { // Leer y mostrar en pantalla todos los datos de un Array ASOCIATIVO (del result set) hasta que no encuentre datos. Se puede también utilizar "MYSQLI_NUM" para datos numéricos y "MYSQLI_BOTH" para ambos tipos de datos. 
            
        // En cuanto a la función para leer el array se puede usar directamente "mysqli_fetch_assoc" o "mysqli_fetch_row".
            
            echo "<tr>";    
            echo "<td>" . $row['CÓDIGOARTÍCULO'] . "</td>";
            echo "<td>" . $row['SECCIÓN'] . "</td>";
            echo "<td>" . $row['NOMBREARTÍCULO'] . "</td>";
            echo "<td>" . $row['PRECIO'] . "</td>";
            echo "<td>" . $row['FECHA'] . "</td>";
            echo "<td>" . $row['IMPORTADO'] . "</td>";
            echo "<td>" . $row['PAÍSDEORIGEN'] . "</td>";
            echo "</tr>";
        }
    
        echo "</table>";
    
        mysqli_close($db_connect);
        
        // Vimos carácteres comodin "%" y "_" que se usan para hacer consultas avanzadas de SQL.
    
        // El comodín % nos ayuda a buscar todos los registros que tengan un dato en común, se puede utilizar el % antes o despues. Ejemplo: SELECT * FROM productos WHERE nombreartículo LIKE "%balon";
    
        // El comodín _ nos ayuda a buscar los registros con el mismo dato que puedan tener letras distintas, es decir omite un determinado caracter en la consulta. Ejemplo: SELECT * FROM productos WHERE nombreartículo LIKE "CENI_ERO"; (teniendo en cuenta que cenicero se escribe con C y en el caso equivocado con Z o S).
        
    ?>
</body>
</html>
    

    