<?php
require_once APP_ROOT . '/app/services/UserService.php';
class UserController
{
    public function index()
    {
        $userService = new UserService();
        $users = $userService->getAllUsers();
        include APP_ROOT . '/app/views/home/index.php';
    }

    public function add()
    {
        $userService = new UserService();
        $users = $userService->addUser();
        include APP_ROOT . '/app/views/admin/add.php';
    }

    public function edit()
    {
    }

    public function remove()
    {
    }
}