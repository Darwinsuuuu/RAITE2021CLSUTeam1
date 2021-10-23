<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="css/login.css">



</head>
<body>
    

    <div class="custom-container">

        <div class="overlay-bg-mobile"></div>

        <div class="hero-wrapper">

            <img src="css/resources/herologo.webp" alt="">

            <p class="login-text-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque voluptas sed dicta natus vero exercitationem quis esse optio aperiam hic earum laborum obcaecati omnis totam a culpa illo, dignissimos distinctio consequatur dolor. Deserunt, quam rerum est eum quidem officiis dolores consequuntur atque exercitationem facere debitis sunt alias aspernatur odio maiores quos unde quas! Repellat, est.</p>

        </div>


        <div class="login-wrapper">
            
            <div class="login-card card">

            <?php

                if(isset($_GET['login']) == "error") {
                    echo "<small class='text-danger text-center poppins fw-bold mb-3'>Invalid email or password</small>";
                }

            ?>
           
                <form action="db/db_login.php" method="POST">


                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="getEmail" placeholder="Email Address">
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" class="form-control" name="getPassword" placeholder="Password">
                    </div>
                    
                    <div class="form-group mb-2">
                        <button class="btn btn-success w-100" name="btnEmployee">Crew Member</button>
                    </div>
                    
                    <div class="form-group mb-3">
                        <button class="btn btn-primary w-100" name="btnAdmin">Office Member</button>
                    </div>

                </form>

            </div>

        </div>

    </div>












    <!-- Jquery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>