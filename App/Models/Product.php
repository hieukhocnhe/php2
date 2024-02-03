<?php


namespace App\Models;

use App\Models\BaseModel;

class Product extends BaseModel
{
    protected $table = 'products';
    public function getProducts()
    {
        $sql = "SELECT * FROM $this->table;";
        $this->setQuery($sql);

        return $this->loadAllRows();
    }

    public function addProduct($name, $price)
    {
        $sql = "INSERT INTO $this->table VALUES ( ?, ?);";
        $this->setQuery($sql);

        return $this->execute([$name, $price]);
    }

    public function detailProduct($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = ?;";
        $this->setQuery($sql);

        return $this->loadRow([$id]);
    }

    public function updateProduct($id, $name, $price)
    {
        $sql = "UPDATE $this->table SET name = ?, price = ? WHERE id = ?;";
        $this->setQuery($sql);

        return $this->execute([$name, $price, $id]);
    }
}