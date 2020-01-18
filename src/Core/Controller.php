<?php
namespace Ifmo\Web\Core;

class Controller
{
    public function render_page($content, $template, $data=[])   // метод генерации страницы
    {
        extract($data); // создание из массива переменных
        ob_start();
        include_once __DIR__ . '/../Views/' . $template;
        $page = ob_get_contents();
        ob_end_clean();
        return $page;
    }

}