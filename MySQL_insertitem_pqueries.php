<style>
        form { text-align: center; }
        table { background-color: darkblue; margin: auto; border-collapse: collapse; }
        td { border: 1px solid green; color: #fff; font-family: 'Consolas', Arial, sans-serif;font-size: 14px; padding: 4px 10px; background-color: darkblue; border-collapse: collapse; }
        
</style>
        <?php

        //  Método para crear consultas preparadas //
    
    /*
        1. Creamos la sentencia SQL sustituyendo los valores de criterio por el símbolo - ? -
        $variableinstrucción = "SELECT * FROM productos WHERE paísdeorigen = ?"
        
        2. Preparamos la consulta con la función mysqli_prepare(). Esta función pide dos parámetros: el objeto $conexion y la sentencia sql.
        $resultado = mysqli_prepare($conexion, $variableinstruccion). La función devuelve un objeto de tipo mysqli_stmt.
        
        3. Se unen los parámetros a la secuencia sql. De esto se encarga la función mysqli_stmt_bind_param(). Esta función devuelve true o false.
        Esta función requiere tres parámetros: el objeto mysqli_stmt(devuelto por mysqli_prepare), el tipo de dato que se utilizará como criterio en sql y la variable de criterio.
        
        4. Se jecuta la consulta con la función mysqli_stmt]_execute(). Esta función devuelve true o false.
        Necesita como parámetro el objeto mysqli_stmt.
        
        5. Se deben ssociar variables al resultado de la consulta)(Una variable por campo de la consulta). Esto lo conseguimos con la función mysqli_stmt_bind_result(). Devuelve true o false.
        Necesita como parámetro el objeto mysqli_stmt y tantas variables como columnas en consulta sql.
        
        6. Se deben leer los valores para mostrarlos en pantalla. Para ellos usamos la función mysqli_stmt_fetch.
        Esta función pide como parámetro el objeto mysqli_stmt. 
    
    */
        $id = $_GET["id"];
        $sec = $_GET["sec"];
        $item = $_GET["item"];
        $price = $_GET["price"];
        $date = $_GET["date"];
        $imp = $_GET["imp"];
        $madein = $_GET["madein"];

        require("MySQL_connection.php");

        // Conexión por Procedimientos

        $db_connect = mysqli_connect($db_host, $db_user, $db_pass); // Conexión a la bd

        if(mysqli_connect_errno()){ // La funciòn mysqli_connect_errno se ejecuta cuando la conexión no es exitosa

            echo "Fallo al conectar con la Base de Datos";

            exit();    // La función exit sirve para salir del código actual o terminarlo.
        }

        mysqli_select_db ($db_connect, $db_name) or die ("No se encuentra la Base de Datos"); // Conecta y selecciona una BD
            
        mysqli_set_charset($db_connect, "utf8"); // Permite usar la codificación UTF8 para mostrar caracteres latinos en el navegador al consultar la BD.
            
        //----------------------------------------------------------------
            
        $db_query = "INSERT INTO productos (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA, IMPORTADO, PAÍSDEORIGEN) VALUES (?,?,?,?,?,?,?)";
            
        echo "$db_query <br><br>";

        $preparation = mysqli_prepare($db_connect, $db_query);

        $bindparam = mysqli_stmt_bind_param($preparation, "sssssss", $id, $sec, $item, $price, $date, $imp, $madein); // los tipos de datos de la función tienen una letra segùn el tipo: s(string), i(integer), d(decimal).

        $bindparam = mysqli_stmt_execute($preparation);

        if ($bindparam == false) {
            
            echo "Error al ejecutar la consulta";
            
        }else{
            
            // $bindparam = mysqli_stmt_bind_result($preparation, $id, $sec, $art, $price, $date, $imp, $country, $pic);
            
            echo "Nuevo registro agregado: <br><br>";
            
            // echo "<table><tr><td>SERIAL</td><td>SECCIÓN</td><td>ITEM</td><td>PRECIO</td><td>FECHA</td><td>IMPORTADO</td><td>PAÍS</td><td>FOTO</td></tr>";
            
            /* while(mysqli_stmt_fetch($preparation)){
                
                echo "<tr><td>" . $id . "</td><td>" .$sec . "</td><td>" . $art . "</td><td>" . $price . "</td><td>" . $date . "</td><td>" . $imp . "</td><td>" . $country . "</td><td>" . $pic . "</td>";
                
            } */
            
            echo "</tr></table>";
            
            mysqli_stmt_close($preparation);
        }
        
        
        
?>