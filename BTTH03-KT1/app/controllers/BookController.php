<?php
require_once APP_ROOT . '/app/services/BookService.php';

class BookController
{
    public function addBook()
    {
        $BookService = new BookService();
        // ($_POST['songname'], $_POST['singer'], $_POST['cateid']);
        // $books = $BookService->addBook($_POST['idSong'], $_POST['tenBaiHat'], $_POST['caSi'], $_POST['idTheLoai']);
        // require_once APP_ROOT . '/app/views/add_song.php';
    }

    public function editBook()
    {
    }

    public function index()
    {
        $bookService = new BookService();
        $books = $bookService->getAllBook();
        include APP_ROOT . '/app/views/book/index.php';
    }

    public function delete()
    {
        $bookService = new BookService();
        $books = $bookService->deleteBook();
        include APP_ROOT . '/app/views/book/index.php';
    }
}