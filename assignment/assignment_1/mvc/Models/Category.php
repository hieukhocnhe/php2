<?php

include_once 'db.php';

class Category extends Database
{
    function show()
    {
        $query = "SELECT * FROM categories";

        return $this->getData($query);
    }

    function create($name_category)
    {
        $query = "INSERT INTO categories (name_category) VALUES ($name_category);";
        $this->getData($query, false);
    }

    function update($id, $name_category)
    {
        $query = "UPDATE categories SET name_category = $name_category WHERE id = $id;";
        $this->getData($query, false);
    }

    function destroy($id)
    {
        $query = "DELETE FROM categories WHERE id = $id;";
        $this->getData($query, false);
    }
}



