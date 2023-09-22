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
        <a href="../admin/add_category.php">
        <button type="button" class="btn btn-success" style="margin-left: 200px;">Thêm mới</button>
        </a>

        <table class="table w-75 container">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên thể loại</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Nhạc đám ma</td>
                    <td>
                        <a href="./edit_category.php"><i class="bi bi-pencil"></i></a>
                    </td>
                    <td>
                        <a href=""><i class="bi bi-trash3"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="footer-admin">
        <?php
        include('../include/footer.php');
        ?>
    </div>
    <script src="./public/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>