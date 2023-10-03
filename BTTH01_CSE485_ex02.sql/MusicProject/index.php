<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="./public/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="main">
        <span class="border border-primary">
            <div class="header">
                <?php
                include('./include/header.php');
                ?>
            </div>

            <div class="slider">
                <?php
                include('./include/slider.php');
                ?>
            </div>

            <div class="content">
                <h3 class="text-primary text-center mt-3">TOP BAI HAT YEU THICH</h3>
                <?php
                include('./include/card.php');
                ?>
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