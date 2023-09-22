<?php
require_once APP_ROOT.'/app/services/UserService.php';
class HomeController{
    public function index(){
        $user = new UserService();
        $users = $user->getAllUsers();
        include APP_ROOT.'/app/views/home/index.php';
    }
}
?>