<!DOCTYPE html>
<html class="h-100">

<head>
    <?php
    include "includes/libs.php";
    ?>

    <link rel="stylesheet" href="css/global.css">
</head>

<body class="h-100 fill-screen-height">
    <div class="container-fluid h-100 ">
        <div class="row  h-100">
            <div class="col-12 col-lg-2 bg-seaferer my-responsive-nav h-100">
                <nav class="navbar navbar-expand-lg navbar-light ">

                    <button class="navbar-toggler ml-auto bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav flex-column">
                            <li class="nav-item d-none d-lg-block">
                                <img src="images/logo.png" class="w-100" alt="">
                            </li><!--  -->

                            <br>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="index.php"><i class="bi bi-box-seam"></i> Ships</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="ship_routes.php"><i class="bi bi-signpost"></i> Ship Routes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white my-active" href="#employees.php"><i class="bi bi-people"></i> Employees</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white" href="contracts.php"><i class="bi bi-file-earmark-text"></i> Contracts</a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
            <div class="col-12 col-lg-10">
                <div class="container mt-5">
                    <div class="row mb-3">
                        <div class="col">
                            <div class="h3">
                                Employee List
                            </div>
                        </div>
                        <div class="col text-end">
                            <!-- add button -->
                            <button class="btn bg-seaferer text-white"><i class="bi bi-plus-square-dotted"></i> Add Employee</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <!-- table -->
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead class="bg-seaferer text-white">
                                        <tr>
                                            <th>Name</th>
                                            <th>Height</th>
                                            <th>Gender</th>
                                            <th>Address</th>
                                            <th>Cell No.</th>
                                            <th>Rank</th>
                                            <th>Birth Date</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Philippines</td>
                                            <td>Manila Port</td>
                                            <td>10 NM</td>
                                            <td>P 10 000</td>
                                            <td>60 m</td>
                                            <td>60 m</td>
                                            <td>60 m</td>
                                            <td>
                                                <button class="btn bg-none text-seaferer btn-sm"><i class="bi bi-view-list"></i> View</button>
                                                <br>
                                                <button class="btn bg-none text-seaferer btn-sm"><i class="bi bi-pencil-square"></i> Edit</button>
                                                <br>
                                                <button class="btn bg-none text-seaferer btn-sm"><i class="bi bi-trash"></i></i> Delete</button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>