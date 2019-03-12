<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySQL - Eliminando Registros</title>
</head>
<body>
    <h1>Elimianción de Ítems</h1>
    <form name="Form" method="GET"  action="MySQL_deletepage.php">
        <label for="cod_art">Código &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="id" id="id"> </br>
        <label for="section">Sección &nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="sec" id="sec"> </br>
        <label for="item">Nombre &nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="art" id="art"> </br>
        <label for="price">Precio &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="price" id="price"> </br>
        <label for="date">Fecha &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="date" id="date"> </br>
        <label for="import">Importado?</label>
        <input type="text" name="imp" id="imp"> </br>
        <label for="country">Origen &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="origin" id="origin"> </br>
        <input type="submit" name="send" id="send" value="Eliminar">
        <input type="reset" name="erase" id="erase" value="Borrar">
    </form>
</body>
</html>