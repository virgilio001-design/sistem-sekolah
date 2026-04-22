<?php
require_once '../app/core/Router.php';

use App\Core\Router;

$router = new Router();

// Register Routes
$router->add('GET', '/students', 'StudentController','index');
$router->add('GET', '/students/create', 'StudentController','create');
$router->add('GET', '/students/{id}', 'StudentController','show');
$router->add('GET', '/students/{id}/edit', 'StudentController','edit');

$router->add('POST', '/students', 'StudentController', 'Store');
$router->add('PUT', '/students/{id}', 'StudentController', 'update');
$router->add('DELETE', '/students/{id}', 'StudentController', 'destroy');

$router->run();
?>