<?php


class IndexController extends  Controller
{
    public  function indexAction(){ // метод отображения главной страницы
        $template = 'template.php';
        $content ='main.php';
        $data = ['page_title' =>'Главная'];
        echo $this ->render_page($content,$template,$data);
    }
}