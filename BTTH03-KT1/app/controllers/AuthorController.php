<?php
require_once APP_ROOT . '/app/services/AuthorService.php';
class AuthorController
{
    public function index()
    {
        $authorService = new AuthorService();
        $authorServices = $authorService->getAllAuthor();
        include APP_ROOT . '/app/views/author/index.php';
    }

    public function add()
    {
    }

    public function edit()
    {
    }

    public function remove()
    {
    }
}