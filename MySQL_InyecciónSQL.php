<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inyección SQL</title>
</head>
<body>
    <h1>Eliminando Registros (Inyección SQL)</h1>
    <form action="MySQL_inyection.php" method="get" name="datos_usuario" id="datos_usuario">
        <label for="">Usuario</label>
        <input type="text" name="user" id="user">
        <label for="">Contraseña</label>
        <input type="text" name="pass" id="pass">
        <input type="submit" name="enviar" id="Eliminar" value="Eliminar">
    </form>
</body>
</html>