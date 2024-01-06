<?php

include_once 'db.php';

function getListProduct()
{
    $sql = "SELECT * FROM products";

    return getData($sql);
}



?>