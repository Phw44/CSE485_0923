<?php
$servername = "localhost";
$username = "root";
$password = "442003";
$dbname = "btth01_cse485";
try {
    if (isset($_POST['ten_tloai'])) {
        $ten_tloai = isset($_POST['ten_tloai']) ? $_POST['ten_tloai'] : null;
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO theloai(ten_tloai) VALUES ('{$ten_tloai}')";
        $conn->exec($sql);
?>
<script>
alert('Them thanh cong');
</script>
<?php
    }
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>


<!doctype html>
<tml lang="en">

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

        <div class="main-add">
            <h2 class="text-center">THÊM THỂ LOẠI MỚI</h2>
            <form action="" method="POST">
                <div class="input-group mb-3 w-75 container">
                    <span class="input-group-text" id="basic-addon1">Tên thể loại</span>
                    <input type="text" name="ten_tloai" id="ten_tloai" class="form-control" placeholder=""
                        aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end w-75 ms-5">
                    <button class="btn btn-success" type="submit">Thêm</button>
                    <button class="btn btn-warning" type="button"><a href="../admin/category.php">Quay lại</a></button>
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

</tml>