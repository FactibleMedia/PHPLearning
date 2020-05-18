<?php
    
    include("model/handle_data_model.php");

    try {
        
        $connection = new PDO('mysql:host=localhost; dbname=blog_bbdd', 'root', '');
        
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        $handlePublication = new Handle_publications($connection);
        
        $getPublications = $handlePublication->get_Publications_byDate();
        
        if(empty($getPublications)) {
            
            echo "Aun no hay entradas";
            
        } else {
            
            foreach($getPublications as $posts) {
                
                echo "<div class='card mb-3'>";
                
                if($posts->get_image()!="") {
                    
                    echo "<img src='img/" . $posts->get_image() . "'width='100%' class='card-img-top' alt='...'>";
                                
                }
                
                echo "<div class='card-body'>";
                
                echo "<h5 class='card-title'>" . $posts->get_title() . "</h5>";
                echo "<p class='card-text'>" . $posts->get_content() . "</hp>";
                echo "<p class='card-text'><small class='text-muted'>Publicado el " . $posts->get_date() . "</small></p>";
                
                echo "</div></div>";
                
                echo "<hr>";
                
            }
            
        }
        
        
    } catch(exception $e) {
        
        die("Error: " . $e->getMessage());
        
    }

?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>