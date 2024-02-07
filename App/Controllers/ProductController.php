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
        if (isset($_POST['add'])) {
            $errs = [];
            if (empty($_POST['name'])) {
                $errs[] = 'Không được để trống trường này !';
            }
            if (empty($_POST['price'])) {
                $errs[] = 'Không được để trống trường này !';
            }
            if (count($errs) >= 1) {
                flash('errors', $errs, 'add-product');
            } else {
                $check = $this->product->addProduct(null, $_POST['name'], $_POST['price']);
                if ($check) {
                    flash('success', "Thêm thành công !", 'add-product');
                }
            }
        }
    }

    public function detail($id)
    {
        $products = $this->product->detailProduct($id);

        return $this->render('product.edit', compact('products'));
    }

    public function editProduct($id)
    {
        if (isset($_POST['edit'])) {
            $errs = [];
            if (empty($_POST['name'])) {
                $errs[] = 'Không được để trống trường này !';
            }
            if (empty($_POST['price'])) {
                $errs[] = 'Không được để trống trường này !';
            }
            if (count($errs) >= 1) {
                flash('errors', $errs, 'edit-product');
            } else {
                $check = $this->product->updateProduct($id, $_POST['name'], $_POST['price']);
                if ($check) {
                    $editRoute = 'detail-product/' . $id;
                    flash('success', "Sửa thành công !", $editRoute);
                }
            }
        }
    }

    public function deleteProduct($id)
    {
        $products = $this->product->deleteProduct($id);

        return $this->render('product.list', ['products' => $products]);
    }
}
