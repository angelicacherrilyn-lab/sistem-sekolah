<?php
require_once './app/core/Router.php';

use App\Core\Router;

$router = new Router();
//register router
$router -> add('GET','/Students', 'StudentsController','index');
$router -> add('GET', '/StudentsCreate', 'StudentsController','create');
$router -> add('GET', '/Students/{id}', 'StudentsController','show');

$router -> run();

?>