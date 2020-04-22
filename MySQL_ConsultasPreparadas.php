<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Búsqueda Países | Consultas preparadas</title>
    

</head>
<body>
    <h1>Buscar país</h1>
    <form action="MySQL_prepared_queries.php" method="get" name="datos_usuario" id="datos_usuario">
        <label for="">Introduce el país</label>
        <input type="text" name="search" id="search">
        <input type="submit" name="sending" id="Buscar" value="Buscar">
    </form>
</body>
 
<?php
   //  Método para crear consultas preparadas //
    
    /*
        1. Creamos la sentencia SQL sustituyendo los valores de criterio por el símbolo - ? -
        $variableinstrucción = "SELECT * FROM productos WHERE paísdeorigen = ?"
        
        2. Preparamos la consulta con la función mysqli_prepare(). Esta función pide dos parámetros: el objeto $conexion y la sentencia sql.
        $resultado = mysqli_prepare($conexion, $variableinstruccion). La función devuelve un objeto de tipo mysqli_stmt.
        
        3. Se unen los parámetros a la secuencia sql. De esto se encarga la función mysqli_stmt_bind_param(). Esta función devuelve true o false.
        Esta función requiere tres parámetros: el objeto mysqli_stmt(devuelto por mysqli_prepare), el tipo de dato que se utilizará como criterio en sql y la variable de criterio.
        
        4. Se ejecuta la consulta con la función mysqli_stmt_execute(). Esta función devuelve true o false.
        Necesita como parámetro el objeto mysqli_stmt.
        
        5. Se deben ssociar variables al resultado de la consulta)(Una variable por campo de la consulta). Esto lo conseguimos con la función mysqli_stmt_bind_result(). Devuelve true o false.
        Necesita como parámetro el objeto mysqli_stmt y tantas variables como columnas en consulta sql.
        
        6. Se deben leer los valores para mostrarlos en pantalla. Para ellos usamos la función mysqli_stmt_fetch.
        Esta función pide como parámetro el objeto mysqli_stmt. 
    
    */
    
?>


</html>