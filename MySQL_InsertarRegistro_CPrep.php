<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insertar Registro | Consultas preparadas</title>
    

</head>
<body>
    <h1>Registro de artículos nuevos</h1>
    <form action="MySQL_insertitem_pqueries.php" method="get" name="datos_usuario" id="datos_usuario">
        <label for="">Código</label><br>
        <input type="text" name="id" id="id"><br>
        <label for="">Sección</label><br>
        <input type="text" name="sec" id="sec"><br>
        <label for="">Item</label><br>
        <input type="text" name="item" id="item"><br>
        <label for="">Precio</label><br>
        <input type="text" name="price" id="price"><br>
        <label for="">Fecha</label><br>
        <input type="text" name="date" id="date"><br>
        <label for="">Importado</label><br>
        <input type="text" name="imp" id="imp"><br>
        <label for="">País</label><br>
        <input type="text" name="madein" id="madein"><br><br>
        <input type="submit" name="sending" id="Insertar" value="Insertar">
    </form>
</body>


</html>