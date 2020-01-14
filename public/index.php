<?php
require_once __DIR__ . '/../src/Core/Controller.php';
require_once __DIR__ . '/../src/Controllers/IndexController.php';
$server = $_SERVER;
$url = $server['REQUEST_URI'];

// "/"
if($url == '/'){
    $controller = new IndexController(); // создали объект
    $controller->indexAction(); // вызвали метод объекта
}
