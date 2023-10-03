<?php
session_start();

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "442003";
    $dbName = "btth01_cse485";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbName", $dbUsername, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT * FROM nguoidung WHERE username = :username OR email = :email");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "Tên đăng nhập hoặc email đã tồn tại. Vui lòng chọn tên đăng nhập và email khác.";
        } else {
            $stmt = $conn->prepare("INSERT INTO nguoidung (username, email, password_hash) VALUES (:username, :email, :password_hash)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password_hash', $hashedPassword);
            $stmt->execute();
            echo "<h2 class='bg-success text-center'>Đăng ký thành công. Đăng nhập <a href='login.php'>tại đây</a>.</h2>";
        }
    } catch (PDOException $e) {
        echo "Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Đăng ký</title>
    <link href="./public/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1 class="text-center mt-5">Đăng ký tài khoản</h1>

    <form method="POST" action="register.php" class="container  w-25">
        <div class="shadow-sm p-3 mb-5 bg-body-tertiary rounded bg-info-subtle mt-3">
            <div class="">
                <label class="form-label" for="username">Tên đăng nhập:</label>
                <input class="form-control" type="text" name="username" required><br>
            </div>

            <div class="">
                <label class="form-label" for="email">Email:</label>
                <input class="form-control" type="email" name="email" required><br>
            </div>

            <div class="">
                <label class="form-label" for="password">Mật khẩu:</label>
                <input class="form-control" type="password" name="password" required><br>
            </div>
            <div class="text-center">
                <button class="btn btn-success text-center" type="submit" name="register">Đăng ký</button>
                <button class="btn btn-warning text-center text-white" type="button" name="back"><a class="text-white text-decoration-none" href="./index.php">Quay
                        Lại</a></button>
            </div>
        </div>


    </form>

</body>

</html>