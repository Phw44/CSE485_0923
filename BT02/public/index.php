<?php
require_once('../app/config/config.php');
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'user';
$action = isset($_GET['action']) ? $_GET['action'] : '';
if ($controller == 'user') {
    require_once APP_ROOT . '/app/controllers/UserController.php';
    $userController = new UserController();
    $userController->index();
} else if ($controller == 'user') {
    require_once APP_ROOT . '/app/controllers/UserController.php';
    $patientController = new UserController();
    switch ($action) {
        case "add":
            // if (isset($_POST['submit'])) {
            //     $id = $_POST['id'];
            //     $fullname = $_POST['fullname'];
            //     $gender = $_POST['gender'];
            //     $date = $_POST['date'];
            //     $address = $_POST['address'];
            //     $mobile = $_POST['mobile'];
            //     if (empty($id) || empty($fullname) || empty($gender) || empty($date) || empty($address) || empty($mobile)) {
            //         $error = "not null";
            //     } else {
            //         $patients->action("INSERT INTO patients(id, fullname, gender, date, address, mobile) VALUES ($id, $fullname, $gender, $date, $address, $mobile)");
            //         header("Location:index.php?controller=user");
            //     }
            // }
            require_once APP_ROOT . '/app/views/admin/add.php';
            break;
        case "edit";
            require_once APP_ROOT . '/app/views/admin/edit.php';
            break;
        case "remove":
            require_once APP_ROOT . '/app/views/admin/remove.php';
            break;
        default:
            require_once APP_ROOT . '/app/views/home/index.php';
            break;
    }
} else {
    echo "Not found";
}
