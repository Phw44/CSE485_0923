<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="main w-50 container mt-5">
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
            <h1>Thêm sách mới</h1>
            <form method="POST">
                <div class="mb-3">
                    <label for="songID" class="form-label">ID</label>
                    <input name="idSong" type="text" class="form-control" id="songID" placeholder="Nhập ID bài hát">
                </div>
                <div class="mb-3">
                    <label for="songName" class="form-label">Tên sách</label>
                    <input name="tenBaiHat" type="text" class="form-control" id="songName" placeholder="Nhập tên sách">
                </div>
                <div class="mb-3">
                    <label for="singer" class="form-label">Năm suất bản</label>
                    <input name="caSi" type="text" class="form-control" id="singer" placeholder="Nhập năm suất bản">
                </div>
                <div class="mb-3">
                    <label for="genreID" class="form-label">ID tác giả</label>
                    <input name="idTheLoai" type="text" class="form-control" id="genreID" placeholder="Nhập ID tác giả">
                </div>
                <button type="submit" class="btn btn-success">Thêm mới</button>
                <button type="button" class="btn btn-warning text-white">
                    <a href="../book/index.php">Quay lại</a>
                </button>
            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>