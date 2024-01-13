<?php

include_once './Models/Product.php';

class ProductController
{
    function show()
    {
        $product = new Product();
        $listProduct = $product->getListProduct();
        include_once './Views/layout/header.php';
        include_once './Views/Product/showProduct.php';
        include_once './Views/layout/footer.php';

    }

    function create()
    {
        include_once './Views/Product/createProduct.php';

    }

    function update()
    {
        echo "Update Product";

    }

    function destroy()
    {
        echo "Destroy Product";

    }
}



?>