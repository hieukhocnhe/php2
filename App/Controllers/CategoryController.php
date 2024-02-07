<?php

namespace App\Controllers;

use App\Controllers\BaseController;
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
                $errs[] = 'Không được để trống trường này !';
            }
            if (count($errs) >= 1) {
                flash('errors', $errs, 'add-category');
            } else {
                $check = $this->category->addCategory(null, $_POST['name']);
                if ($check) {
                    flash('success', "Thêm thành công !", 'add-category');
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
                $errs[] = 'Không được để trống trường này !';
            }
            if (count($errs) >= 1) {
                flash('errors', $errs, 'edit-category');
            } else {
                $check = $this->category->updateCategory($id, $_POST['name']);
                if ($check) {
                    $editRoute = 'detail-category/' . $id;
                    flash('success', "Sửa thành công !", $editRoute);
                }
            }
        }
    }

    public function deleteCategory($id)
    {
        $categories = $this->category->deleteCategory($id);

        return $this->render('category.list', ['categories' => $categories]);
    }
}
