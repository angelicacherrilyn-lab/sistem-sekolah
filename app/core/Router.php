<?php


namespace App\Core;

use App\Controllers\StudentsController;

class Router

{

private array $routes = [];
public function add(string $method, string $uri, string $controller, string $function)

{
 $this->routes[] = [
    'method' => $method,
    'uri' => $uri,
    'controller' => $controller,
    'function' => $function,
 ];
 
} 

public function run(): void

{
    $method = $_SERVER['REQUEST_METHOD'];
    $uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

    foreach($this->routes as $router){
        $pattern =str_replace(
            '{id}',
            '([0-9]+)',
            $route['uri']
        );

        $pattern = '#^' . $pattern . '$#';

        if (preg_match($pattern, $uri, $matches)) {
            require_once './app/controllers/'.$route['controller'].'.php';
            array_shift($matches);

            $controllerClass = 'App\\Controllers\\' . $route['controller'];
            $controller = new $controllerClass();

            $function = $route['function'];
            $controller->$function();
            return;
        }
    }


    if ($method == 'GET' && $uri == '/students'){
       require_once './app/controllers/StudentsController.php';
         $controller = new StudentsController();
         $controller->index();
        return;
    }  

    if ($method == 'GET' && $uri == '/students/create'){
        require_once './app/controllers/StudentsController.php';
         $controller = new StudentsController();
         $controller->create();
        return;
    }


    http_response_code(404);
    echo '<h1>404 - Page Not Found</h1>';
}
}