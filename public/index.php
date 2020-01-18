<?php

//require_once __DIR__ . '/../src/Core/Controller.php';
//require_once __DIR__ . '/../src/Models/BooksModel.php';
//require_once __DIR__ . '/../src/Core/Router.php';

require_once __DIR__ . '/../vendor/autoload.php';

$server = $_SERVER;
$url = $server['REQUEST_URI'];

// "/"
//if($url == '/'){
//    $controller = new IndexController(); // создали объект
//    $controller->indexAction(); // вызвали метод объекта
//}
Ifmo\Web\Core\Router::run();
