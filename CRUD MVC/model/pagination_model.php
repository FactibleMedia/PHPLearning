<?php

// ------------- /// INICIO PAGINACIÓN /// --------------- //
    
    require_once("connection.php");

    $connection = Connect::connection();

    $pagesize=2;
            
        if(isset($_GET["page"])) {
            
            if($_GET["page"]==1){
                
                header("Location:index.php");
                    
            } else {
                    
                $page = $_GET["page"];
                
            }
                
        } else {
            
            $page = 1;
        }
                
        $pages_start = ($page-1)*$pagesize;
            
        $db_query="SELECT * FROM users_data";
            
        $result = $connection->prepare($db_query);

        $result->execute(array());
            
        $row_cant = $result->rowCount();
            
        $totalpages = ceil($row_cant / $pagesize);
    
    // ---------------- /// FIN PAGINACIÓN /// ---------------- //

?>