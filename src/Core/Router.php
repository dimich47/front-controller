<?php
namespace Ifmo\Web\Core;


class Router
{
    private $dispatcher_func;
    public function __construct($urls)
    {
        $this->dispatcher_func = $this->setOptions("$urls");
    }
    private function setOptions($urls){
        return function (\FastRoute\RouteCollector $r) use ($urls){
            foreach ($urls as $name->$data) {
                $arr = explode("::", $data['controller']);
                $r->addRoute($data['method'], $data['path'], [$arr[0],$arr[1]]);
            }
        };
    }

    public function dispatch($httpMethod, $uri){
        $dispatcher = \FastRoute\simpleDispatcher($this->dispatcher_func); // вызов функции из библиотеки у которой свое пространство имен
        return $dispatcher->dispatch($httpMethod, $uri);
    }
}