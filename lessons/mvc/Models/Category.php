<?php

include_once 'db.php';

class Category extends Database
{
    function show()
    {
        $sql = "SELECT * FROM categories";

        return $this->getData($sql);
    }

}



?>