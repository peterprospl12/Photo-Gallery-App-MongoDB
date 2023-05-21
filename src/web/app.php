<?php
require '../vendor/autoload.php';
require '../Router.php';
session_start();
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}
$router = new Router();


$router->get('/', 'MainpageController::show');
$router->get('/tabels', 'TabelsController::main');
$router->get('/tabels/grupaA', 'TabelsController::grupaA');
$router->get('/tabels/grupaB', 'TabelsController::grupaB');

$router->post('/form', 'ImageController::add');
$router->get('/form/new', 'ImageController::new');

$router->get('/gallery', 'ImageController::index');
$router->get('/gallery/chosen', 'ImageController::chosen');

$router->post('/deleteChoice', 'ImageController::forget');
$router->post('/saveChoice', 'ImageController::remember');

$router->post('/register', 'UserController::add');
$router->get('/user/register', 'UserController::register');

$router->post('/login', 'UserController::verify');
$router->get('/user/login', 'UserController::login');
$router->get('/logout', 'UserController::logout');




$router->_404('ErrorController::_404');


$view = $router->dispatch();
$view->render();
?>
