<?php

    include("connection.php");

    $ID = $_GET["Id"];

    $connection->query("DELETE FROM users_data WHERE id = '$ID'");

    header("Location:index.php");

?>