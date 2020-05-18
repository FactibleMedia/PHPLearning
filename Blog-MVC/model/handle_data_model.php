<?php
    
    include_once ("publication_model.php"); // Se invoca al archivo con el objeto(clase) a manipular para poder usar sus propiedades y métodos. 

    class Handle_publications {
        
        private $connection;
        
        public function __construct($connect) {
            
            $this->set_Connection($connect);
            
        }
        
        public function set_Connection(PDO $connect) {
            
            $this->connection = $connect;
            
        }
        
        public function get_Publications_byDate() {
            
            $publications_array = array();
            
            $counter = 0;
            
            $result = $this->connection->query("SELECT * FROM content ORDER BY DATE DESC");
            
            while ($register = $result->fetch(PDO::FETCH_ASSOC)) {
                
                $publication = new Publication_object();
                
                $publication->set_id($register["id"]);
                $publication->set_title($register["title"]);
                $publication->set_date($register["date"]);
                $publication->set_content($register["content"]);
                $publication->set_image($register["image"]);
                
                $publications_array[$counter] = $publication;
                
                $counter++;
                
            }
            
            return $publications_array;
            
        }
        
        public function set_Publications(Publication_object $publication) {
            
            $publications_query = "INSERT INTO content (title, date, content, image) VALUES ('" . $publication->get_title() . "', '" . $publication->get_date() . "', '" . $publication->get_content() . "', '" . $publication->get_image() . "')";
            
            $this->connection->exec($publications_query);
            
        }
        
    }

?>