<!DOCTYPE html>
<html class="h-100">

<head>
    <?php
    include "includes/libs.php";
    ?>
    <script src="js/validate.js"></script>
    <script src="js/ship_route.js"></script>
    <link rel="stylesheet" href="css/global.css">

</head>

<body class="h-100 fill-screen-height">
    <div class="container-fluid h-100 ">
        <div class="row  h-100">
            <div class="col-12 col-lg-2 bg-seaferer my-responsive-nav h-100">
                <nav class="navbar navbar-expand-lg navbar-light ">

                    <button class="navbar-toggler ml-auto bg-light bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav flex-column">

                            <li class="nav-item d-none d-lg-block">
                                <img src="images/logo.png" class="w-100" alt="">
                            </li>
                            <br>

                            <li class="nav-item">
                                <a class="nav-link text-white" href="index.php"><i class="bi bi-box-seam"></i> Ships</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white my-active" href="#ship_routes.php"><i class="bi bi-signpost"></i> Ship Routes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="employees.php"><i class="bi bi-people"></i> Employees</a>
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
                                Routes List
                            </div>
                        </div>
                        <div class="col text-end">
                            <!-- add button -->
                            <button class="btn bg-seaferer text-white" data-bs-toggle="modal" data-bs-target="#AddNewRoute"><i class="bi bi-plus-square-dotted"></i> Add Route</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <!-- table -->
                            <div class="table-responsive shadow rounded">
                                <table class="table table-hover table-striped">
                                    <thead class="bg-seaferer text-white">
                                        <tr>
                                            <th>Country</th>
                                            <th>Port Name</th>
                                            <th>Distance</th>
                                            <th>Price</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Philippines</td>
                                            <td>Manila Port</td>
                                            <td>10 NM</td>
                                            <td>P 10 000</td>
                                            <td>
                                                <button class="btn bg-none text-seaferer"><i class="bi bi-pencil-square"></i> Edit</button>

                                                <button class="btn bg-none text-seaferer"><i class="bi bi-trash"></i></i> Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Philippines</td>
                                            <td>Manila Port</td>
                                            <td>10 NM</td>
                                            <td>P 10 000</td>
                                            <td>
                                                <button class="btn bg-none text-seaferer"><i class="bi bi-pencil-square"></i> Edit</button>

                                                <button class="btn bg-none text-seaferer"><i class="bi bi-trash"></i></i> Delete</button>
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

    <!-- insert modal -->
    <!-- Modal -->
    <div class="modal fade" id="AddNewRoute" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Ship Route</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="inserRoute_form" action="#" class="needs-validation" novalidate method="POST">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="country" class="form-label">Country</label>
                                        <input name="country" type="text" class="form-control" id="country" placeholder="Enter Country" required>
                                        <div class="invalid-feedback">
                                            Field cannot be blank
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="portName" class="form-label">Port Name</label>
                                        <input name="port_name" type="text" class="form-control" id="portName" placeholder="Enter Country" required>
                                        <div class="invalid-feedback">
                                            Field cannot be blank
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="distance" class="form-label">Distance (Nautical mile)</label>
                                        <input name="distance" type="number" class="form-control" id="distance" placeholder="Enter Country" required>
                                        <div class="invalid-feedback">
                                            Field cannot be blank
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <input name="price" type="number" class="form-control" id="price" placeholder="Enter Country" required>
                                        <div class="invalid-feedback">
                                            Field cannot be blank
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="inserRoute_form" class="btn btn-primary">Save New Route</button>
                </div>
            </div>
        </div>
    </div>

    <!-- update modal -->
    <!-- Modal -->
    <div class="modal fade" id="updateModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Ship Route</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="updateRoute_form" action="#" class="needs-validation" novalidate method="POST">
                        <input type="text" id="update_route_id" name="route_id" hidden>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="country" class="form-label">Country</label>
                                        <input id="update_country" name="country" type="text" class="form-control" id="country" placeholder="Enter Country" required>
                                        <div class="invalid-feedback">
                                            Field cannot be blank
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="portName" class="form-label">Port Name</label>
                                        <input id="update_port_name" name="port_name" type="text" class="form-control" id="portName" placeholder="Enter Country" required>
                                        <div class="invalid-feedback">
                                            Field cannot be blank
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="distance" class="form-label">Distance (Nautical mile)</label>
                                        <input id="update_distance" name="distance" type="number" class="form-control" id="distance" placeholder="Enter Country" required>
                                        <div class="invalid-feedback">
                                            Field cannot be blank
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <input id="update_price" name="price" type="number" class="form-control" id="price" placeholder="Enter Country" required>
                                        <div class="invalid-feedback">
                                            Field cannot be blank
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="updateRoute_form" class="btn btn-primary">Save New Route</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>