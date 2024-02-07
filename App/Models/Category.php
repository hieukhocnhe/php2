<?php

namespace App\Models;

use App\Models\BaseModel;

class Category extends BaseModel
{
    protected $table = 'categories';
    public function getCategories()
    {
        $sql = "SELECT * FROM $this->table;";
        $this->setQuery($sql);

        return $this->loadAllRows();
    }

    public function addCategory($id, $name)
    {
        $sql = "INSERT INTO $this->table VALUES ( ?, ?);";
        $this->setQuery($sql);

        return $this->execute([$id, $name]);
    }

    public function detailCategory($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = ?;";
        $this->setQuery($sql);

        return $this->loadRow([$id]);
    }

    public function updateCategory($id, $name)
    {
        $sql = "UPDATE $this->table SET name = ? WHERE id = ?;";
        $this->setQuery($sql);

        return $this->execute([$name, $id]);
    }

    public function deleteCategory($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = ?;";
        $this->setQuery($sql);

        return $this->execute([$id]);
    }
}