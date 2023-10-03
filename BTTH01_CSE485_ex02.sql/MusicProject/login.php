<?php
session_start();

if (isset($_POST['login'])) {
    $usernameOrEmail = $_POST['usernameOrEmail'];
    $password = $_POST['password'];

    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "442003";
    $dbName = "btth01_cse485";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbName", $dbUsername, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT * FROM nguoidung WHERE username = :usernameOrEmail OR email = :usernameOrEmail");
        $stmt->bindParam(':usernameOrEmail', $usernameOrEmail);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (password_verify($password, $user['password_hash'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];

                header("Location: ./admin/index.php");
                exit();
            } else {
                echo "Sai mật khẩu. Vui lòng thử lại.";
            }
        } else {
            echo "Tài khoản không tồn tại!";
        }
    } catch (PDOException $e) {
        echo "Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage();
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="./public/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="main">
        <span class="border border-primary">
            <div class="header">
                <?php
                include('./include/header.php');
                ?>
            </div>
            <div class="login w-25 h-25 bg-secondary container mt-5">
                <h5 class="text-white">Sign In</h5>
                <hr>
                <form method="POST" action="login.php" class="row row-cols-lg g-3 align-items-center ">
                    <div class="col-12">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <input type="text" name="usernameOrEmail" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">Password</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-key-fill"></i></div>
                            <input type="password" name="password" class="form-control" id="inlineFormInputGroupUsername" placeholder="Password">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                            <label class="form-check-label" for="inlineFormCheck">
                                Remember me
                            </label>
                        </div>
                    </div>

                    <div class="col-12 row">
                        <button type="submit" name="login" class="btn btn-warning mt-3 ms-1">
                            Login
                        </button>

                    </div>
                    <div class="icon">
                        <i class="bi bi-facebook text-primary fs-3"></i>
                        <i class="bi bi-google text-danger fs-3"></i>
                        <i class="bi bi-twitter text-primary fs-3"></i>
                    </div>
                    <hr>
                    <div class="a">
                        <p class="text-center">Don' t have account? <a class="text-warning text-decoration-none" href="./register.php">Sinup</a>
                        </p>
                        <p class="text-center "><a class="text-warning text-decoration-none" href="">Forgot
                                you password?</a>
                        </p>
                    </div>
                </form>

            </div>
    </div>

    <footer>
        <div class="footer">
            <?php
            include('./include/footer.php');
            ?>
        </div>
    </footer>

    </span>

    </div>

    <script src="./public/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
</body>

</html>