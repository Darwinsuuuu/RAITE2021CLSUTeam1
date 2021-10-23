<!DOCTYPE html>
<html class="h-100">

<head>
    <?php
    include "includes/libs.php";
    ?>

    <link rel="stylesheet" href="css/global.css">
    <script src="js/validate.js"></script>
    <script src="js/ships.js"></script>

</head>

<body class="h-100 fill-screen-height">
    <div class="container-fluid h-100 ">
        <div class="row  h-100">
            <div class="col-12 col-lg-2 bg-seaferer my-responsive-nav h-100">
                <nav class="navbar navbar-expand-lg navbar-light ">

                    <button class="navbar-toggler ml-auto bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav flex-column">
                            <li class="nav-item d-none d-lg-block">
                                <img src="images/logo.png" class="w-100" alt="">
                            </li><!--  -->

                            <br>
                            <li class="nav-item">
                                <a class="nav-link text-white my-active" href="#index.php"><i class="bi bi-box-seam"></i> Ships</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="ship_routes.php"><i class="bi bi-signpost"></i> Ship Routes</a>
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
                                Ships List
                            </div>
                        </div>
                        <div class="col text-end">
                            <!-- add button -->
                            <button class="btn bg-seaferer text-white" data-bs-toggle="modal" data-bs-target="#insertModal"><i class="bi bi-plus-square-dotted"></i> Add New Ship</button>
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
                                            <th>Breadth</th>
                                            <th>Total Weight</th>
                                            <th>Draught</th>
                                            <th>Max Weight</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        

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
    <div class="modal fade" id="insertModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Ship</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="insert_form" action="#" class="needs-validation" novalidate method="POST">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="ship_name" class="form-label">Ship Name</label>
                                        <input name="ship_name" type="text" class="form-control" id="ship_name" placeholder="Enter Ship name" required>
                                        <div class="invalid-feedback">
                                            Field cannot be blank
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="ship_height" class="form-label">Ship Height (feet)</label>
                                        <input name="ship_height" type="text" class="form-control" id="ship_height" placeholder="Enter Ship height" required>
                                        <div class="invalid-feedback">
                                            Field cannot be blank
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="ship_breadth" class="form-label">Ship Breadth (feet)</label>
                                        <input name="ship_breadth" type="text" class="form-control" id="ship_breadth" placeholder="Enter Ship Breadth" required>
                                        <div class="invalid-feedback">
                                            Field cannot be blank
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="total_weight" class="form-label">Total Weight (tons)</label>
                                        <input name="total_weight" type="text" class="form-control" id="total_weight" placeholder="Enter Ship Weight" required>
                                        <div class="invalid-feedback">
                                            Field cannot be blank
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="ship_draught" class="form-label">Ship Draught (feet)</label>
                                        <input name="ship_draught" type="text" class="form-control" id="ship_draught" placeholder="Enter Ship Draught" required>
                                        <div class="invalid-feedback">
                                            Field cannot be blank
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="max_weight" class="form-label">Max Weight (tons)</label>
                                        <input name="max_weight" type="text" class="form-control" id="max_weight" placeholder="Enter Ship Weight" required>
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
                    <button type="submit" form="insert_form" class="btn btn-primary">Save New Route</button>
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
                    <h5 class="modal-title">Update Ship Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="updateForm" action="#" class="needs-validation" novalidate method="POST">
                        <input type="text" id="ship_id" name="update_ship_id" hidden>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="ship_name" class="form-label">Ship Name</label>
                                        <input name="ship_name" type="text" class="form-control" id="update_ship_name" placeholder="Enter Ship name" required>
                                        <div class="invalid-feedback">
                                            Field cannot be blank
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="ship_height" class="form-label">Ship Height (feet)</label>
                                        <input name="ship_height" type="text" class="form-control" id="update_ship_height" placeholder="Enter Ship height" required>
                                        <div class="invalid-feedback">
                                            Field cannot be blank
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="ship_breadth" class="form-label">Ship Breadth (feet)</label>
                                        <input name="ship_breadth" type="text" class="form-control" id="update_ship_breadth" placeholder="Enter Ship Breadth" required>
                                        <div class="invalid-feedback">
                                            Field cannot be blank
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="total_weight" class="form-label">Total Weight (tons)</label>
                                        <input name="total_weight" type="text" class="form-control" id="update_total_weight" placeholder="Enter Ship Weight" required>
                                        <div class="invalid-feedback">
                                            Field cannot be blank
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="ship_draught" class="form-label">Ship Draught (feet)</label>
                                        <input name="ship_draught" type="text" class="form-control" id="update_ship_draught" placeholder="Enter Ship Draught" required>
                                        <div class="invalid-feedback">
                                            Field cannot be blank
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="max_weight" class="form-label">Max Weight (tons)</label>
                                        <input name="max_weight" type="text" class="form-control" id="update_max_weight" placeholder="Enter Ship Weight" required>
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
                    <button type="submit" form="updateForm" class="btn btn-primary">Save New Route</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>