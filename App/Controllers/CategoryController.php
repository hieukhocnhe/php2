<?php

namespace App\Controllers;

use App\Models\Category;

class CategoryController extends BaseController
{
    public $category;
    public function __construct()
    {
        $this->category = new Category;
    }


    public function index()
    {
        $categories = $this->category->getCategories();

        return $this->render('category.list', ['categories' => $categories]);
    }

    public function addCategory()
    {

        return $this->render('category.add');
    }

    public function postCategory()
    {
        if (isset($_POST['add'])) {
            $errs = [];
            if (empty($_POST['name'])) {
                $errs[] = 'Không được để trống trường tên sản phẩm !';
            }
            if (count($errs) >= 1) {
                flash('errors', $errs, 'add-category');
            } else {
                $check = $this->category->addCategory(null, $_POST['name']);
                if ($check) {
                    flash('success', "Thêm sản phẩm thành công !", 'add-category');
                } else {
                    flash('errors', "Thêm sản phẩm không thành công !", 'add-category');
                }
            }
        }
    }

    public function detail($id)
    {
        $categories = $this->category->detailCategory($id);

        return $this->render('category.edit', compact('categories'));
    }

    public function editCategory($id)
    {
        if (isset($_POST['edit'])) {
            $errs = [];
            if (empty($_POST['name'])) {
                $errs[] = 'Không được để trống trường tên danh mục !';
            }
            if (count($errs) >= 1) {
                flash('errors', $errs, 'detail-category/' . $id);
            } else {
                $check = $this->category->updateCategory($id, $_POST['name']);
                if ($check) {
                    $editRoute = 'detail-category/' . $id;
                    if ($check) {
                        flash('success', "Sửa danh mục thành công !", '');
                    } else {
                        flash('errors', "Sửa danh mục không thành công !", $editRoute);
                    }
                }
            }
        }
    }

    public function deleteCategory($id)
    {
        $check = $this->category->deleteCategory($id);
        if ($check) {
            flash('success', 'Xóa danh mục thành công !', 'list-category');
        } else {
            flash('errors', 'Xóa danh mục không thành công !', 'list-category');
        }
    }
}
