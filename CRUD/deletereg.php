<?php

    include("connection.php"); // Incluimos la conexión

    $ID = $_GET["Id"]; // Obtenemos el campo clave para eliminar el dato.

    $connection->query("DELETE FROM users_data WHERE id = '$ID'"); // Creamos la consulta a la base de datos para eliminar el dato pasándole el campo clave.

    header("Location:index.php"); // Redirigimos a la página donde se  muestran los datos del array o el index.

?>