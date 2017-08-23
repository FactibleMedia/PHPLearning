<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySQL - Búsqueda</title>
    <style>
        form { text-align: center; }
        
    </style>
    
    <?php
        include("MySQL_searchpage.php");
    ?>
</head>
<body>
   
   <?php
        $thesearch=$_GET["search"];
        $same_page=$_SERVER["PHP_SELF"];
        if($thesearch!=NULL) {
            execute_query($thesearch);
        }else{
            echo ("<form action='" . $same_page . "'method='GET'>
                    <label>Buscar: <input type='text' name='search'></label>
                    <input type='submit' name='' value='Buscar'>
                </form>");
        }
    ?>
</body>
</html>