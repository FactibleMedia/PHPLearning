<?php

    require_once("model/products_model.php");
    
    $products = new Products_model();

    $products_array = $products->get_products();
    
    
    require_once("views/products_view.php");
    
    
    

?>