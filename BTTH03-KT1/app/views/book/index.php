<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quan ly</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="shadow-sm p-3 mb-5 bg-body-tertiary rounded">
        <nav class="nav justify-content-center">
            <button class="btn btn-success ">
                <a class="nav-link text-white" href="#" aria-current="page">Quản lý thư viện</a>
            </button>

            <!-- <button class="btn btn-success mx-3">
                <a class="nav-link text-white" href="" aria-current="page">Quản lý tác giả
                </a>
            </button> -->
        </nav>
    </div>

    <div class="container mt-5">
        <h3 class="text-center text-uppercase text-success mt-5">Quản lý sách</h3>
        <a href="<?= DOMAIN . 'app/views/book/add.php'; ?>" class='btn btn-success'>Thêm mới</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên sách</th>
                    <th scope="col">Năm suất bản</th>
                    <th scope="col">ID tác giả</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($books as $book) {
                ?>
                <tr>
                    <th scope="row"><?= $book->getId(); ?></th>
                    <td><?= $book->getTenSach(); ?></td>
                    <td><?= $book->getNamXuatBan(); ?></td>
                    <td><?= $book->getIdTacGia(); ?></td>
                    <td>
                        <a href="<?= DOMAIN . 'app/views/book/edit.php?id=$book->getId()' ?>"><i
                                class="bi bi-pencil-square"></i></a>
                    </td>

                    <td>
                        <a href="<?= DOMAIN . 'app/views/book/delete.php?id=$book->getId()' ?>"><i
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