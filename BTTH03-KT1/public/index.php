<?php
require_once('../app/config/config.php');
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'book';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
if ($controller == 'book') {
    require_once APP_ROOT . '/app/controllers/bookController.php';
    $bookController = new BookController();
    // $songController->index();
    switch ($action) {
        case "index";
            $bookController->index();
            require_once APP_ROOT . '/app/views/book/index.php';
            break;
        case "add":
            $bookController->addBook();
            require_once APP_ROOT . '/app/views/book/add.php';
            break;
        case "edit";
            $bookController->editBook();
            require_once APP_ROOT . '/app/views/book/edit.php';
            break;
        default:
            require_once APP_ROOT . '/app/views/book/index.php';
            break;
    }
} else if ($controller == 'author') {
    require_once APP_ROOT . '/app/controllers/AuthorController.php';
    $authorController = new AuthorController();
    switch ($action) {
        case "index";
            $authorController->index();
            require_once DOMAIN . '/app/views/author/index.php';
            break;
        case "add":
            $categoryControllerauthorController->add();
            require_once APP_ROOT . '/app/views/author/add.php';
            break;
        case "edit";
            $authorController->edit();
            require_once APP_ROOT . '/app/views/author/edit.php';
            break;
        default:
            require_once APP_ROOT . '/app/views/author/index.php';
            break;
    }
} else {
    echo "Not found";
}