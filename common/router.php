<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

$router->filter('auth', function () {
    if (!isset($_SESSION['auth']) || empty($_SESSION['auth'])) {
        header('location: ' . BASE_URL . 'login');
        die;
    }
});

$router->get('/', function () {
    return "trang chủ";
});
//định nghĩa đường dẫn trỏ đến Product Controller
$router->get('list-product', [App\Controllers\ProductController::class, 'index']);
$router->get('add-product', [App\Controllers\ProductController::class, 'addProduct']);
$router->post('post-product', [App\Controllers\ProductController::class, 'postProduct']);
$router->get('detail-product/{id}', [App\Controllers\ProductController::class, 'detail']);

$router->post('edit-product/{id}', [App\Controllers\ProductController::class, 'editProduct']);

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

echo $response;

