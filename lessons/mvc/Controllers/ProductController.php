<?php

include_once './Models/Product.php';

class ProductController
{
    function show()
    {
        $product = new Product();
        $listProduct = $product->show();
        include_once './Views/layout/header.php';
        include_once './Views/Product/show.php';
        include_once './Views/layout/footer.php';

    }

    function create()
    {
        include_once './Views/Product/create.php';

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