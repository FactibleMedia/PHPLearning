<?php // Construye elementos u objetos de tipo blog

    class Publication_object  {
        
        // Propiedades del objeto publication
        private $id;        
        private $da_te;
        private $title;
        private $content; 
        private $image;
        
        
        // Métodos de acceso setter y getter
        
        public function get_id(){  // Obtiene el valor de la propiedad $id      
            return $this->id;            
        }
        
        public function set_id($ids) {  // Esteblece el valor de la propiedad $id          
            $this->id = $ids;            
        }
        //---
        
        public function get_title(){            
            return $this->title;            
        }
        
        public function set_title($titles) {            
            $this->title = $titles;            
        }
        //---
        
        public function get_date(){            
            return $this->da_te;            
        }
         
        public function set_date($dates) {            
            $this->da_te = $dates;            
        }
        //---
        
        public function get_content(){            
            return $this->content;            
        }
        
        public function set_content($contents) {            
            $this->content = $contents;            
        }
        //---
        
        public function get_image(){            
            return $this->image;            
        }
        
        public function set_image($images) {            
            $this->image = $images;            
        }
        //---
    }


?>