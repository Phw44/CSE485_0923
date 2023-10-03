<?php
$servername = "localhost";
$username = "root";
$password = "442003";
$dbname = "btth01_cse485";
// $ma = isset($_POST['ma']) ? $_POST['ma'] : null;
// $ten = isset($_POST['ten']) ? $_POST['ten'] : null;
try {
    $ten_tloai = isset($_POST['ten_tloai']) ? $_POST['ten_tloai'] : null;
    $ma_tloai = isset($_GET['ma_tloai']) ? $_GET['ma_tloai'] : null;
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE theloai SET ten_tloai = '{$ten_tloai}' WHERE ma_tloai= '{$ma_tloai}'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="./public/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <?php
    include('../include/headerAdmin.php');
    ?>

    <div class="content-edit">

        <h2 class="text-center">SỬA THÔNG TIN THỂ LOẠI</h2>
        <form action="" method="POST">
            <div class="input-group mb-3 w-75 container">
                <span class="input-group-text" id="basic-addon1">Mã thể loại</span>
                <input type="text" name="ma_tloai" class="form-control" placeholder="" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3 w-75 container">
                <span class="input-group-text" id="basic-addon1">Tên thể loại</span>
                <input type="text" class="form-control" name="ten_tloai" placeholder="" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end w-75 ms-5">
                <button class="btn btn-success" type="submit">Lưu lại</button>
                <button class="btn btn-warning text-center text-white" type="button" name="back"><a
                        class="text-white text-decoration-none" href="./index.php">Quay
                        Lại</a></button>
            </div>
        </form>
    </div>

    <div class="footer-admin">
        <?php
        include('../include/footer.php');
        ?>
    </div>
    <script src="./public/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>