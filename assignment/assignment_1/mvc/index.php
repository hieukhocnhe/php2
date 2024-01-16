<?php

include_once 'Controllers/CourseController.php';

$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        $courseController = new CourseController();
        $courseController->show();
        break;
    case 'create':
        $courseController = new CourseController();
        $courseController->create();
        break;
    case 'edit':
        $id = $_GET['id'];
        $courseController = new CourseController();
        $courseController->edit($id);
        break;
    case 'destroy':
        $id = $_GET['id'];
        $courseController = new CourseController();
        $courseController->destroy($id);
        break;
    default:
        $courseController = new CourseController();
        $courseController->show();
        break;
}



