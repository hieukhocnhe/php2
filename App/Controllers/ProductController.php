<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{

    public function index()
    {
        echo 'Đây là trang hiển thị sản phẩm';
    }

    public function addProduct()
    {
        echo 'Thêm sản phẩm';
    }
}
