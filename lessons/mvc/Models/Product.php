<?php

include_once 'db.php';

class Product extends Database
{
    function show()
    {
        $sql = "SELECT * FROM products";

        return $this->getData($sql);
    }
    function create() {
    }

}



?>