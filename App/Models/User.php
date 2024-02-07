<?php

namespace App\Models;

use App\Models\BaseModel;

class User extends BaseModel
{
    protected $table = 'users';
    public function getUsers()
    {
        $sql = "SELECT * FROM $this->table;";
        $this->setQuery($sql);

        return $this->loadAllRows();
    }

    public function addUser($id, $name)
    {
        $sql = "INSERT INTO $this->table VALUES ( ?, ?);";
        $this->setQuery($sql);

        return $this->execute([$id, $name]);
    }

    public function detailUser($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = ?;";
        $this->setQuery($sql);

        return $this->loadRow([$id]);
    }

    public function updateUser($id, $name)
    {
        $sql = "UPDATE $this->table SET name = ? WHERE id = ?;";
        $this->setQuery($sql);

        return $this->execute([$name, $id]);
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = ?;";
        $this->setQuery($sql);

        return $this->execute([$id]);
    }
}