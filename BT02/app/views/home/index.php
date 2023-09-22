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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="main">
        <div class="menu">
            <div class="row">
                <div class="col-2">
                    <?php
                    include(APP_ROOT . '/app/views//include/menu.php');
                    ?>
                </div>
                <div class="col-9">
                    <div class="container">
                        <div class="row d-flex mt-3">
                            <div class="col d-flex align-item-center">
                                <i class="bi bi-list"></i>
                                <h2 class="mx-3">Users</h2>
                            </div>

                            <div class="col">
                                <div class="input-group flex-nowrap">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="bi bi-search"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Search here.."
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <!-- <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="addon-wrapping"> -->
                                </div>
                            </div>
                        </div>

                        <div class="shadow p-3 mb-5 bg-body-tertiary rounded mt-5">
                            <div class="filter d-flex justify-content-between">

                                <p class="text-warning">Filter</p>
                                <i style="border-radius: 50%; width: 24px; height: 24px;"
                                    class="bi bi-chevron-compact-up bg-danger p-1"></i>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <input type="text" class="form-control" placeholder="Email" aria-label="First name">
                                </div>

                                <div class="col-3">
                                    <input type="text" class="form-control" placeholder="Mobile" aria-label="Last name">
                                </div>

                                <div class="col-2">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                    </select>
                                </div>

                                <div class="col-2">
                                    <!-- <input type="text" class="form-control" placeholder="Last " aria-label="Last name"> -->
                                    <button type="button" class="btn btn-danger">
                                        <i class="bi bi-search"></i>
                                        Filter</button>
                                </div>

                                <div class="col-2">
                                    <button type="button" class="btn btn-outline-danger">Clear</button>
                                </div>
                            </div>
                        </div>

                        <div class="shadow p-3 bg-body-tertiary rounded">
                            <div class="filter d-flex justify-content-between">
                                <p class="text-warning">User</p>
                                <div class="btn">
                                    <button type="button" class="btn btn-outline-danger">Danger</button>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <!-- <button type="button" class="btn btn-danger border-end">Left</button> -->
                                        <!-- <button type="button" class="btn btn-danger">+</button> -->
                                    </div>
                                    <a class="btn btn-danger"
                                        href="<?= DOMAIN . 'app/views/admin/add.php?id=$user->getId()' ?>">Add</a>
                                </div>
                            </div>
                        </div>

                        <div class="shadow p-3 mt-1 bg-body-tertiary rounded">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    value="" id="flexCheckDefault"></div>
                                        </th>
                                        <th scope="col">Full name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Groups</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Date Of Birth</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                                    foreach ($users as $user) {
                                    ?>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    value="" id="flexCheckDefault"></div>
                                        </th>
                                        <td><?= $user->getFullname(); ?></td>
                                        <td><?= $user->getEmail(); ?></td>
                                        <td><?= $user->getGender(); ?></td>
                                        <td><?= $user->getGroup(); ?></td>
                                        <td><?= $user->getMobile(); ?></td>
                                        <td><?= $user->getDateOfBirth(); ?></td>
                                        <td>
                                            <a href=""><i class="bi bi-record"></i></a>
                                        </td>

                                        <td>
                                            <a href=""><i class="bi bi-eye"></i></a>
                                            <a href="<?= DOMAIN . 'app/views/admin/edit.php?id=$user->getId()' ?>"><i
                                                    class="bi bi-pencil"></i></a>
                                            <a href=""><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                    }

                                    ?>
                                </tbody>
                            </table>
                            <div class="container d-flex flex-row-reverse">
                                <button type="button" class="btn btn-outline-danger ">></button>
                                <button type="button" class="btn btn-outline-danger mx-1">2</button>
                                <button type="button" class="btn btn-outline-danger bg-danger text-white mx-1">1</button>
                                <button type="button" class="btn btn-outline-danger"><</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="shadow p-3 mb-5 bg-body-tertiary rounded d-flex flex-column h-100">
                        <!-- <img src="..../public/img/profile.jpg" alt="loi" class="mt-5"> -->

                        <i class="bi bi-gear pt-5"></i>
                        <i class="bi bi-envelope"></i>
                        <i class="bi bi-bell-fill"></i>

                    </div>
                </div>
            </div>
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