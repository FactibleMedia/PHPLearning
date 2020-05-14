<?php

    require_once("model/products_model.php");
    
    $product = new Products_model(); // Nueva instancia de la clase.

    $products_array = $product->get_products();
    
    
    require_once("views/products_view.php");
    
?>