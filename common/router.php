<?php

use Phroute\Phroute\RouteCollector;
use App\Controllers\ProductController;
use App\Controllers\UserController;
use App\Controllers\CategoryController;


$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

$router->filter('auth', function () {
    if (!isset($_SESSION['auth']) || empty($_SESSION['auth'])) {
        header('location: ' . BASE_URL . 'login');
        die;
    }
});


$router->get('/', [App\Controllers\CategoryController::class, 'index']);


//Product

$router->get('list-product', [ProductController::class, 'index']);
$router->get('add-product', [ProductController::class, 'addProduct']);
$router->post('post-product', [ProductController::class, 'postProduct']);
$router->get('detail-product/{id}', [ProductController::class, 'detail']);
$router->post('edit-product/{id}', [ProductController::class, 'editProduct']);
$router->get('delete-product/{id}', [ProductController::class, 'deleteProduct']);

// User

$router->get('list-user', [UserController::class, 'index']);
$router->get('add-user', [UserController::class, 'addUser']);
$router->post('post-user', [UserController::class, 'postUser']);
$router->get('detail-user/{id}', [UserController::class, 'detail']);
$router->post('edit-user/{id}', [UserController::class, 'editUser']);
$router->get('delete-user/{id}', [UserController::class, 'deleteUser']);

// Category

$router->get('list-category', [CategoryController::class, 'index']);
$router->get('add-category', [CategoryController::class, 'addCategory']);
$router->post('post-category', [CategoryController::class, 'postCategory']);
$router->get('detail-category/{id}', [CategoryController::class, 'detail']);
$router->post('edit-category/{id}', [CategoryController::class, 'editCategory']);
$router->get('delete-category/{id}', [CategoryController::class, 'deleteCategory']);

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

echo $response;

