<?php
$servername = "localhost";
$username = "root";
$password = "442003";
$dbname = "btth01_cse485";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT ma_tloai,ten_tloai FROM theloai LIMIT 10");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="./public/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <?php
    include('../include/headerAdmin.php');
    ?>
    <div class="content-category w-100 ">

        <table class="table w-75 container">
            <thead>
                <th>
                    <a href="../admin/add_category.php">
                        <button type="button" class="btn btn-success justify-content-center text-decoration-none">Thêm
                            mới</button>
                    </a>
                </th>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên thể loại</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $item) {
                ?>
                <tr>
                    <th scope="row">
                        <?= $item->ma_tloai; ?>
                    </th>
                    <td>
                        <?= $item->ten_tloai; ?>
                    </td> <!-- This was missing -->
                    <td>
                        <a href="../admin/edit_category.php?ma_tloai=<?= $item->ma_tloai ?>"><i
                                class="bi bi-pencil"></i></a>
                    </td>
                    <td>
                        <a href="../admin/delete.php?ma_tloai=<?= $item->ma_tloai ?>"><i class="bi bi-trash3"></i></a>
                    </td>
                </tr>
                <?php
                }
                ?>

            </tbody>

        </table>
    </div>
    <div class=" footer-admin">
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