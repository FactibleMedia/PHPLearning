<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insertar Registro | PDO</title>
    

</head>
<body>
    <h1>Registro de artículos nuevos</h1>
    <form action="PDO_insertar_item.php" method="post" name="datos_usuario">
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