<?php


class Router
{
    public  static  function run(){
        $controller = 'index';
        $action = 'index';
        $params = null;
       // front-controller/books/all
        $server =$_SERVER;
        $url = $server ['REQUEST_URI'];
        $routes = explode('/', $url);
        // ["","books","all"]

        // имя контроллера
        if(!empty($routes[1])) {
            $controller = $routes[1];
            // 'books'
        }

        // для метода
        if(!empty($routes[2])) {
            $action = $routes[1];
            // 'all'
        }
        if(!empty($routes[3])) {
            $params = $routes[3];
            // 'all'
        }
        $controller = ucfirst(strtolower($controller)).'Controller'; // получили BooksController
        require_once __DIR__. '/../Controllers/' . $controller . '.php';

        // создаем объект
        $controller = new controller();

        $action = strtolower($action). 'Action';
        // allAction
        $controller->$action($params);
    }
}