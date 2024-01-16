<?php

include_once './Models/Course.php';
include_once './Models/Category.php';

class CourseController
{
    public function show()
    {
        $course = new Course();
        $courses = $course->show();
        include_once './Views/layout/header.php';
        include_once './Views/Course/show.php';
        include_once './Views/layout/footer.php';
    }

    public function create()
    {
        include_once './Views/layout/header.php';
        $category = new Category();
        $categories = $category->show();
        include_once './Views/Course/create.php';
        if (isset($_POST['create'])) {
            $name_course = $_POST['name_course'];
            $price = $_POST['price'];
            $id_category = $_POST['id_category'];
            if ($_FILES['image']['name'] != null) {
                $image = $_FILES['image']['name'];
                $target_dir = "./Public/images/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $extensions_arr = array("jpg", "jpeg", "png", "gif");
                if (in_array($imageFileType, $extensions_arr)) {
                    move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);
                }
            } else {
                $image = 'default.png';
            }
            if ($name_course == '') {
                $_SESSION['error']['name_course'] = 'Vui lòng nhập tên khóa học';
            }
            if ($price == '') {
                $_SESSION['error']['price'] = 'Vui lòng nhập giá khóa học';
            } else {
                if (!is_numeric($price)) {
                    $_SESSION['error']['price'] = 'Vui lòng nhập giá khóa học là số';
                } else {
                    if ($price < 0) {
                        $_SESSION['error']['price'] = 'Vui lòng nhập giá khóa học lớn hơn 0';
                    }
                }
            }
            if ($id_category == '') {
                $_SESSION['error']['id_category'] = 'Vui lòng chọn danh mục';
            }

            if (empty($_SESSION['error'])) {
                $course = new Course();
                $course->create($name_course, $image, $price, $id_category);
                header('Location: index.php?url=/');
            } else {
                header('Location: index.php?url=/');
            }
        }
        include_once './Views/layout/footer.php';
    }

    public function edit($id)
    {
        include_once './Views/layout/header.php';
        $course = new Course();
        $course = $course->edit($id);
        $category = new Category();
        $categories = $category->show();
        include_once './Views/Course/edit.php';

        if (isset($_POST['edit'])) {
            $name_course = $_POST['name_course'];
            $price = $_POST['price'];
            $id_category = $_POST['id_category'];
            if ($_FILES['image']['name'] != null) {
                $image = $_FILES['image']['name'];
                $target_dir = "./Public/images/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $extensions_arr = array("jpg", "jpeg", "png", "gif");
                if (in_array($imageFileType, $extensions_arr)) {
                    move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);
                }
            } else {
                $image = $course[0]['image'];
            }
            if ($name_course == '') {
                $_SESSION['error']['name_course'] = 'Vui lòng nhập tên khóa học';
            }
            if ($price == '') {
                $_SESSION['error']['price'] = 'Vui lòng nhập giá khóa học';
            } else {
                if (!is_numeric($price)) {
                    $_SESSION['error']['price'] = 'Vui lòng nhập giá khóa học là số';
                } else {
                    if ($price < 0) {
                        $_SESSION['error']['price'] = 'Vui lòng nhập giá khóa học lớn hơn 0';
                    }
                }
            }
            if ($id_category == '') {
                $_SESSION['error']['id_category'] = 'Vui lòng chọn danh mục';
            }

            if (empty($_SESSION['error'])) {
                $course = new Course();
                $course->update($id, $id_category, $name_course, $image, $price);
                header('Location: index.php?url=/');
            } else {
                header('Location: index.php?url=edit&id=' . $id);
            }
        }
        include_once './Views/layout/footer.php';
    }


    public function destroy($id)
    {
        $course = new Course();
        $course->destroy($id);
        header('Location: index.php?url=/');
    }
}
