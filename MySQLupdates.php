<style>
        form { text-align: center; }
        table { background-color: darkblue; margin: auto; border-collapse: collapse;}
        td { border: 1px solid green; color: #fff; font-family: 'Consolas', Arial, sans-serif;font-size: 14px; padding: 4px 10px; background-color: darkblue; border-collapse: collapse; }
    h1 { font-family: 'Consolas', Arial, sans-serif; font-size: 22px; text-align: center; color: green; }
        
    </style>
       

       <?php 
        
    // Conectarse a PHPmyAdmin con xampp en la terminal: cd /Applications/XAMPP/xamppfiles/bin;./mysql --user=root --password=

    $id=$_GET["id"];
    $sec=$_GET["sec"];
    $art=$_GET["art"];
    $price=$_GET["price"];
    $date=$_GET["date"];
    $imp=$_GET["imp"];
    $country=$_GET["origin"];
 
    require("MySQL_connection.php"); 

    // Conexión por Procedimientos

    $db_connect = mysqli_connect($db_host, $db_user, $db_pass); // Conexión a la bd

    if(mysqli_connect_errno()){ // La funciòn mysqli_connect_errno se ejecuta cuando la conexión no es exitosa

         echo "Fallo al conectar con la Base de Datos";

         exit();    // La función exit sirve para salir del código actual o terminarlo.
    }

    mysqli_select_db ($db_connect, $db_name) or die ("No se encuentra la Base de Datos"); // Conecta y selecciona una BD

    mysqli_set_charset($db_connect, "utf8"); // Permite usar la codificación UTF8 para mostrar caracteres latinos en el navegador al consultar la BD.
    
    
    
    // ------------------------------------------------------------------

    $db_query = "UPDATE productos SET CÓDIGOARTÍCULO='$id', SECCIÓN='$sec', NOMBREARTÍCULO='$art', PRECIO='$price', FECHA='$date', IMPORTADO='$imp', PAÍSDEORIGEN='$country' WHERE CÓDIGOARTÍCULO = '$id'"; // Sentencia de consulta a la bd con Mysql

    //echo "$id " . "$art " . "$sec " . "$price " . "$date " . "$imp " . "  Van registros</br></br>";

//Zona Antioquia <antioquia@colaves.com>, Calidad <calidad@colaves.com>

    $db_qresults = mysqli_query($db_connect, $db_query); // result set / record set.

    if($db_qresults==false){
        echo "Error en el registro";
    }else{
        echo "<h1>¡Registro Actualizado!</h1>";
        
        echo "<table><tr><td>SERIAL</td><td>SECCIÓN</td><td>ITEM</td><td>PRECIO</td><td>FECHA</td><td>IMPORTADO</td><td>PAÍS</td><td>FOTO</td></tr>";
        
        echo "<td>$id</td>";
        echo "<td>$sec</td>";
        echo "<td>$art</td>";
        echo "<td>$price</td>";
        echo "<td>$date</td>";
        echo "<td>$imp</td>";
        echo "<td>$country</td>";
        
        echo "</tr></table>";
    }

    mysqli_close($db_connect);

?>
        