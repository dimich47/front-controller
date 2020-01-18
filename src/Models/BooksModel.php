<?php
namespace Ifmo\Web\Models;

class BooksModel
{
    public function getAllBooks(){
        return [
                [
                    'id'=>1,
                    'title'=>'Книга1',
                    'description'=>'Описание книги',
                    'page_count'=>127
                ],
            [
                'id'=>2,
                'title'=>'Книга2',
                'description'=>'Описание книги',
                'page_count'=>287
            ],
            [
                'id'=>3,
                'title'=>'Книга3',
                'description'=>'Описание книги',
                'page_count'=>927
            ]
        ];
    }

    public function getById($id){
        return $this->getAllBooks()[$id-1];
    }
}