<?php

    include_once 'db_connect.php';

    $email = $_POST['getEmail'];
    $pass= $_POST['getPassword'];

    if(isset($_POST['btnEmployee'])) {

        echo "hello";

        $sql = "SELECT * FROM tbl_employees WHERE email = '$email' AND password = '$pass'";
        $result = mysqli_query($connect, $sql);

        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                session_start();
                $_SESSION["id"] = $row["employee_id"];
                header("Location: ../index.php");

            }

        } else {

            header("Location: ../login.php?login=false");

        }

    }




    // login for admin page

    // if(isset($_POST['btnAdmin'])) {

    //     echo "hello";

    //     $sql = "SELECT * FROM tbl_employees WHERE email = '$email' AND password = '$pass'";
    //     $result = mysqli_query($connect, $sql);

    //     if(mysqli_num_rows($result) > 0) {
    //         while ($row = mysqli_fetch_assoc($result)) {

    //             session_start();
    //             $_SESSION["id"] = $row["employee_id"];
    //             header("Location: ../index.php");

    //         }

    //     } else {

    //         header("Location: ../login.php?login=false");

    //     }

    // }

    

?>