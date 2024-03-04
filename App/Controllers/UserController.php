<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends BaseController
{
    public $user;
    public function __construct()
    {
        $this->user = new User;
    }


    public function index()
    {
        $users = $this->user->getUsers();

        return $this->render('user.list', ['users' => $users]);
    }

    public function addUser()
    {

        return $this->render('user.add');
    }

    public function postUser()
    {
        if (isset($_POST['add'])) {
            $errs = [];
            if (empty($_POST['name'])) {
                $errs[] = 'Không được để trống trường tên người dùng !';
            }
            if (count($errs) >= 1) {
                flash('errors', $errs, 'add-user');
            } else {
                $check = $this->user->addUser(null, $_POST['name']);
                if ($check) {
                    flash('success', "Thêm người dùng thành công !", 'add-user');
                } else {
                    flash('errors', "Thêm người dùng không thành công !", 'add-user');
                }
            }
        }
    }

    public function detail($id)
    {
        $users = $this->user->detailUser($id);

        return $this->render('user.edit', compact('users'));
    }

    public function editUser($id)
    {
        if (isset($_POST['edit'])) {
            $errs = [];
            if (empty($_POST['name'])) {
                $errs[] = 'Không được để trống trường tên người dùng !';
            }
            if (count($errs) >= 1) {
                flash('errors', $errs, 'detail-user/' . $id);
            } else {
                $check = $this->user->updateUser($id, $_POST['name']);
                $editRoute = 'detail-user/' . $id;
                if ($check) {
                    flash('success', "Sửa người dùng thành công !", 'list-user');
                } else {
                    flash('errors', "Sửa người dùng không thành công !", $editRoute);
                }
            }
        }
    }

    public function deleteUser($id)
    {
        $check = $this->user->deleteUser($id);
        if ($check) {
            flash('success', 'Xóa người dùng thành công !', 'list-user');
        } else {
            flash('errors', 'Xóa người dùng không thành công !', 'list-user');
        }
    }
}
