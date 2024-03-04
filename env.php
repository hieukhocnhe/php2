<?php
const BASE_URL = 'http://localhost/php2/';
const DBHOST = 'localhost';
const DBNAME = 'assignment2';
const DBCHARSET = 'utf8';
const DBUSER = 'root';
const DBPASS = '';

function route($url)
{
    return BASE_URL . $url;
}
function flash($key, $msg, $route)
{
    $_SESSION[$key] = $msg;
    switch ($key) {
        case 'success':
            unset($_SESSION['errors']);
            break;
        case 'errors':
            unset($_SESSION['success']);
            break;
    }
    header('location:' . BASE_URL . $route . '?msg=' . $key);
    die;
}