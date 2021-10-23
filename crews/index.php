<?php

    include_once 'db/db_connect.php';    
    
    session_start();
    $id = $_SESSION["id"];

    $sql = "SELECT * FROM tbl_employees WHERE employee_id = $id";

    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

        
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/674b5b9445.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/index.css">
    
</head>
<body>


    <header class="header">


        <a class="navbar-brand" href="#">
            <img src="css/resources/herologo.webp" alt="herologo.webp">
        </a>


        <nav class="navigation">

            <ul>
                <li>
                    <a href="index.php">my profile</a>
                </li>

                <li>
                    <a href="contracts.php">contracts</a>
                </li>

                <li>
                    <a href="db/logout.php">logout</a>
                </li>
            </ul>

        </nav>

    </header>


    <div class="container mt-sm-2 mt-lg-5">


        <div class="details-container">

            <div class="profile-wrapper">
                <img src="db/uploaded_profile/<?php echo $row["profile"]; ?>" alt="profile.jpg">
                <a href="editProfile.php" class="poppins btn btn-primary mt-2">Edit Profile</a>
            </div>

            <div class="employee-details-wrapper">

                
                <h3 class="poppins">General Information</h3>
                <p class="info-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem dolor quae quos necessitatibus possimus, magnam repellat iste reiciendis modi laboriosam commodi, corporis aliquid.</p>

                <div class="row mt-4">
                    <div class="col-5">
                        <div class="form-group mb-3">
                            <p class="detail-header mb-1 text-uppercase">Rank/ Position</p>
                            <input type="text" class="form-control" value="<?php echo $row["rank"] ?>" readonly>
                        </div>
                    </div>

                    <div class="col-5">
                        <div class="form-group mb-3">
                            <p class="detail-header mb-1">Date Joined</p>
                            <input type="text" class="form-control" value="<?php echo $row["date_joined"] ?>" readonly>
                        </div>
                    </div>
                </div>

                
                <hr class="mt-3 mb-5">

                <h3 class="poppins">Personal Information</h3>
                <p class="info-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem dolor quae quos necessitatibus possimus, magnam repellat iste reiciendis modi laboriosam commodi, corporis aliquid? Similique, optio hic expedita mollitia voluptatem beatae?</p>

                

                <div class="row mt-4">
                    <div class="col">
                        <div class="form-group mb-3">
                            <p class="detail-header mb-1">Firstname</p>
                            <input type="text" class="form-control text-uppercase" value="<?php echo $row["firstname"] ?>" readonly>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group mb-3">
                            <p class="detail-header mb-1">Middlename</p>
                            <input type="text" class="form-control text-uppercase" value="<?php echo $row["middlename"] ?>" readonly>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group mb-3">
                            <p class="detail-header mb-1">Lastname</p>
                            <input type="text" class="form-control text-uppercase" value="<?php echo $row["lastname"] ?>" readonly>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-3">
                        <div class="form-group mb-3">
                            <p class="detail-header mb-1">Gender</p>
                            <input type="text" class="form-control text-uppercase" value="<?php echo $row["gender"] ?>" readonly>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group mb-3">
                            <p class="detail-header mb-1">Birthday</p>
                            <input type="text" class="form-control text-uppercase" value="<?php echo $row["birthday"] ?>" readonly>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group mb-3">
                            <p class="detail-header mb-1">Age</p>
                            <input type="text" class="form-control" value="<?php echo $row["age"]." YRS OLD" ?>" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5">
                        <div class="form-group mb-3">
                            <p class="detail-header mb-1">Email Address</p>
                            <input type="text" class="form-control" value="<?php echo $row["email"] ?>" readonly>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group mb-3">
                            <p class="detail-header mb-1">Phone Number</p>
                            <input type="text" class="form-control" value="<?php echo $row["contact"] ?>" readonly>
                        </div>
                    </div>

                </div>
               

                <hr>


            </div>

        </div>
        

    </div>






    <!-- Jquery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>