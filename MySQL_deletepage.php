<style>
        table { border: 1px solid #000; }
        td { border: 1px solid #000; }
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

    $db_query = "DELETE FROM productos WHERE CÓDIGOARTÍCULO='$id'"; // Sentencia de consulta a la bd con Mysql

    $db_qresults = mysqli_query($db_connect, $db_query); // result set / record set.

    if($db_qresults==false){
        echo "Error en el registro";
    }else{
        // echo "Registros Eliminados = ";
        //echo mysqli_affected_rows($db_connect);
        
        if (mysqli_affected_rows($db_connect)==0) {
            echo "No se eliminó ningun registro con ese criterio o no existe";
        }else{
            echo "Se Han eliminado " . mysqli_affected_rows($db_connect) . "registros";
        }
        
    }

    mysqli_close($db_connect);  

    // Para actualizar registros en una base de datos utilizamos la siguiente instrucción: UPDATE nombre_tabla SET nombre_campo = valor según el tipo de dato WHERE nombre_campo = valor seguún el tipo de dato. Ejemplo: UPDATE productos SET nombreartículo = 'pantalon', códigoartículo = 'ar41' WHERE paísdeorigen = 'España';
?>
       
        