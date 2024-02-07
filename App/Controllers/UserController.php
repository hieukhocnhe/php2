<?php

namespace App\Controllers;

use App\Controllers\BaseController;
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
                $errs[] = 'Không được để trống trường này !';
            }
            if (count($errs) >= 1) {
                flash('errors', $errs, 'add-user');
            } else {
                $check = $this->user->addUser(null, $_POST['name']);
                if ($check) {
                    flash('success', "Thêm thành công !", 'add-user');
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
                $errs[] = 'Không được để trống trường này !';
            }
            if (count($errs) >= 1) {
                flash('errors', $errs, 'edit-user');
            } else {
                $check = $this->user->updateUser($id, $_POST['name']);
                if ($check) {
                    $editRoute = 'detail-user/' . $id;
                    flash('success', "Sửa thành công !", $editRoute);
                }
            }
        }
    }

    public function deleteUser($id)
    {
        $users = $this->user->deleteUser($id);

        return $this->render('user.list', ['users' => $users]);
    }
}
