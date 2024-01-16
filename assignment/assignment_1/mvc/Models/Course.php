<?php

include_once 'db.php';

class Course extends Database
{
    function show()
    {
        $query = "SELECT
                    courses.*,
                    categories.name_category
                FROM
                    courses
                LEFT JOIN categories ON courses.id_category = categories.id;";

        return $this->getData($query);
    }

    function create($name_course, $image, $price, $id_category)
    {
        $query = "INSERT INTO courses (name_course, image, price, id_category) 
                    VALUES ('$name_course', '$image', '$price', '$id_category');";
        $this->getData($query, false);
    }

    public function edit($id)
    {
        $query = "SELECT * FROM courses WHERE id = $id";

        return $this->getData($query);
    }

    public function update($id, $id_category, $name_course, $image, $price)
    {
        $query = "UPDATE courses SET id_category = '$id_category', name_course = '$name_course', image = '$image', price = '$price' WHERE id = $id";
        $this->getData($query, false);
    }

    function destroy($id)
    {
        $query = "DELETE FROM courses WHERE id = $id;";
        $this->getData($query, false);
    }
}



