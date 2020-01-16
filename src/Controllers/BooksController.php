<?php


class BooksController extends Controller
{
    private $books_model;
    public function __construct()
    {
        $this->books_model = new BooksModel();
    }


    public  function indexAction(){ // метод отображения  страницы книг
        $template = 'template.php';
        $content ='books.php';
        $books = $this->books_model->getAllBooks();
        $data = ['page_title' =>'Книги', 'allbooks'=>$books];
        echo $this ->render_page($content,$template,$data);
    }

    public function showAction($id){
        $template = 'template.php';
        $content ='book.php';
        $book = $this->books_model->getById($id);
        $data = ['page_title' =>$book['title'], 'book'=>$book];
        echo $this ->render_page($content,$template,$data);
    }
}