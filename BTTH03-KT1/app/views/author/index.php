<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The loai</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <div class="container mt-5">
        <h3 class="text-center text-uppercase text-success mt-5">Danh sách thể loại</h3>
        <a href="<?= DOMAIN . 'app/views/author/add.php'; ?>" class='btn btn-success'>Thêm mới</a>
        <a href="<?= DOMAIN . 'app/views/book/index.php'; ?>" class='btn btn-success'>Quay lai</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên thể loại</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($authors as $author) {
                ?>
                <tr>
                    <th scope="row"><?= $author->getId(); ?></th>
                    <td><?= $author->getTenTacGia(); ?></td>
                    <td>
                        <a href="<?= DOMAIN . 'app/views/author/edit.php?id=$author->getId()' ?>"><i
                                class="bi bi-pencil-square"></i></a>
                    </td>

                    <td>
                        <a href="<?= DOMAIN . 'app/views/category/delete.php?id=$author->getId()' ?>"><i
                                class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>