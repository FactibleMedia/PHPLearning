<?php

    require_once("model/person_model.php");
    
    $persona = new Personas_model();

    $personas_array = $persona->get_personas();
    
    
    require_once("views/person_view.php");
    
    
    

?>