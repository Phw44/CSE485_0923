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
                <form class="row row-cols-lg g-3 align-items-center ">
                    <div class="col-12">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">Password</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-key-fill"></i></div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Password">
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
                        <button type="submit" class="btn btn-warning mt-3 ms-1">
                            <a class="text-dark text-decoration-none w-100" href="./admin/index.php">Login</a>
                        </button>
                    </div>
                    <div class="icon">
                        <i class="bi bi-facebook text-primary fs-3"></i>
                        <i class="bi bi-google text-danger fs-3"></i>
                        <i class="bi bi-twitter text-primary fs-3"></i>
                    </div>
                    <hr>
                    <div class="a">
                        <p class="text-center">Don't have account? <a class="text-warning text-decoration-none" href="">Sinup</a>
                        </p>
                        <p class="text-center "><a class="text-warning text-decoration-none" href="">Forgot
                                you password?</a>
                        </p>
                    </div>
            </div>
            </form>
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