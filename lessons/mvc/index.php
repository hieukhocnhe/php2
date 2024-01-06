<?php

include_once 'Controllers/ProductController.php';

$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        listProduct();
        break;
    case 'addProduct':
        addProduct();
        break;
    case 'editProduct':
        editProduct();
        break;
    case 'delProduct':
        deleteProduct();
        break;
    default:
        # code...
        break;
}




?>