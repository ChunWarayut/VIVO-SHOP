<?php
    require_once("./models/ProductsModel.php");
    $product_model = new ProductsModel;

    if(!isset($_GET['action'])) {
        $product = $product_model -> getProductsBy($keyword);
        require_once('./views/home/view.inc.php');
    } else if( $_GET['action'] == "edit") {

    } 
?>