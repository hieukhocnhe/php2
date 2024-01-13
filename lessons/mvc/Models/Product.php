<?php

include_once 'db.php';

class Product extends Database
{
    function getListProduct()
    {
        $sql = "SELECT * FROM products";

        return $this->getData($sql);
    }

}



?>