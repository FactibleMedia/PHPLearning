<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySQL - Búsqueda</title>
    <style>
        form { text-align: center; }
        table { background-color: darkblue; margin: auto; border-collapse: collapse;}
        td { border: 1px solid green; color: #fff; font-family: 'Consolas', Arial, sans-serif;font-size: 14px; padding: 4px 10px; background-color: darkblue; border-collapse: collapse; }
         ¿
    </style>
     
    <?php
        include("MySQL_searchpage.php");
    ?>
</head>
<body>
   
   <?php // Método php para generar un campo de busqueda a una base de datos y develva los valores requeridos según el query establecido dentro de la función "execute_query" dentro del archivo "MySQL_searchpage.php"
        $thesearch=$_GET["search"];
        $same_page=$_SERVER["PHP_SELF"]; // Página del servidor a la que tiene que llamar, en el caso "PHP_SELF" llama a la misma página.
        if($thesearch!=NULL) {
            echo ("<form action='" . $same_page . "'method='GET'>
                    <label>Buscar: <input type='text' name='search'></label>
                    <input type='submit' name='' value='Buscar'>
                </form><br>");
            execute_query($thesearch);
        }else{
            echo ("<form action='" . $same_page . "'method='GET'>
                    <label>Buscar: <input type='text' name='search'></label>
                    <input type='submit' name='' value='Buscar'>
                </form>");
        }
    
    // Las inyecciones SQL son consultas que se pueden introducir en los inputs y campos de texto con los cuales se completan consultas con condicionales. Un condicional seria: > ' OR '1'='1 < 
    ?>
</body>
</html> 