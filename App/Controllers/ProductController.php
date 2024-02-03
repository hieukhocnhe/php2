<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController
{
    public $product;
    public function __construct()
    {
        $this->product = new Product;
    }


    public function index()
    {
        $products = $this->product->getProducts();

        return $this->render('product.list', ['products' => $products]);
    }

    public function addProduct()
    {

        return $this->render('product.add');
    }

    public function postProduct()
    {

    }

    public function detail($id)
    {
        $product = $this->product->detailProduct($id);

        return $this->render('product.edit', compact('products'));
    }

    public function editProduct()
    {

    }
}
