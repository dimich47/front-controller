<?php
namespace Ifmo\Web\Core;
//
//
//class Router
//{
//    public  static  function run(){
//        $controller = 'index';
//        $action = 'index';
//        $params = null;
//       // front-controller/books/all
//        $server =$_SERVER;
//        $url = $server ['REQUEST_URI'];
//        $routes = explode('/', $url);
//        // ["","books","all"]
//
//        // имя контроллера
//        if(!empty($routes[1])) {
//            $controller = $routes[1];
//            // 'books'
//        }
//
//        // для метода
//        if(!empty($routes[2])) {
//            $action = $routes[1];
//            // 'all'
//        }
//        if(!empty($routes[3])) {
//            $params = $routes[3];
//            // 'all'
//        }
//        $controller = ucfirst(strtolower($controller)).'Controller'; // получили BooksController
//        require_once __DIR__. '/../Controllers/' . $controller . '.php';
//
//        // создаем объект
//        $controller = new controller();
//
//        $action = strtolower($action). 'Action';
//        // allAction
//        $controller->$action($params);
//    }
//}

class Router
{
    public static function run()
    {
        $controller = 'index';
        $action = 'index';
        $params = null;
        // http://front-controller/books/all
        $server = $_SERVER;
        $uri = $server['REQUEST_URI'];
        // $uri = /books/all;
        $routes = explode('/', $uri);
//        $routes = ["","books","all"];
        // для контроллера
        if (!empty($routes[1])) {
            $controller = $routes[1];
//            $controller = 'books';
        }
        // для метода
        if (!empty($routes[2])) {
            $action = $routes[2];
//            $action = 'all';
        }
        if (!empty($routes[3])) {
            $params = $routes[3];
        }
        $controller = 'Ifmo\Web\Controllers\\'.
            ucfirst(strtolower($controller)) .
            'Controller';
//        $controller = BooksController



//        require_once __DIR__ .
//            '/../Controllers/' .
//            $controller . '.php';




//        require_once BooksController.php
        $controller = new $controller();
//        $controller = new BooksController();
        $action = strtolower($action) . 'Action';
//        $action = allAction
        $controller->$action($params);
        // проверки:
        // на наличие файла
        // на наличие класса
        // на наличие метода
    }
}