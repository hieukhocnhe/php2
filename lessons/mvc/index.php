<?php

include_once 'Controllers/ProductController.php';

$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        $productController = new ProductController();
        $productController->show();
        break;
    case 'create':
        $productController = new ProductController();
        $productController->create();
        break;
    case 'update':
        $productController = new ProductController();
        $productController->update();
        break;
    case 'destroy':
        $productController = new ProductController();
        $productController->destroy();
        break;
    default:
        # code...
        break;
}




?>