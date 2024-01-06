<?php

include_once './Models/Product.php';

function listProduct()
{

    $listProduct = getListProduct();
    include_once './Views/layout/header.php';
    include_once './Views/Product/listProduct.php';
    include_once './Views/layout/footer.php';

}

function addProduct()
{
    include_once './Views/Product/addProduct.php';

}

function editProduct()
{
    echo "Edit Product";

}

function deleteProduct()
{
    echo "Delete Product";

}


?>