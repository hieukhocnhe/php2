<?php

namespace App\Controllers;

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

        return $this->render('product.list', compact('products'));
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
                $errs[] = 'Không được để trống trường tên sản phẩm !';
            }
            if (empty($_POST['price'])) {
                $errs[] = 'Không được để trống trường giá sản phẩm !';
            }
            if (count($errs) >= 1) {
                flash('errors', $errs, 'add-product');
            } else {
                $check = $this->product->addProduct(null, $_POST['name'], $_POST['price']);
                if ($check) {
                    flash('success', "Thêm sản phẩm thành công !", 'add-product');
                }
                else {
                    flash('errors', "Thêm sản phẩm không thành công !", 'add-product');
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
                $errs[] = 'Không được để trống trường tên sản phẩm !';
            }
            if (empty($_POST['price'])) {
                $errs[] = 'Không được để trống trường giá sản phẩm !';
            }
            if (count($errs) >= 1) {
                flash('errors', $errs, 'detail-product/' . $id);
            } else {
                $check = $this->product->updateProduct($id, $_POST['name'], $_POST['price']);
                if ($check) {
                    $editRoute = 'detail-product/' . $id;
                    if ($check) {
                        flash('success', "Sửa sản phẩm thành công !", '');
                    } else {
                        flash('errors', "Sửa sản phẩm không thành công", $editRoute);
                    }
                }
            }
        }
    }

    public function deleteProduct($id)
    {
        $check = $this->product->deleteProduct($id);
        if ($check) {
            flash('success', 'Xóa sản phẩm thành công !', 'list-product');
        } else {
            flash('errors', 'Xóa sản phẩm không thành công !', 'list-product');
        }
    }
}
