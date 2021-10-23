<?php

    include_once 'db_connect.php';

    session_start();
    $id = $_SESSION["id"];

    $fname = $_POST['getFirstname'];
    $mname = $_POST['getMiddlename'];
    $lname = $_POST['getLastname'];
    $gender = $_POST['getGender'];
    $bday = $_POST['getBirthday'];
    $age = $_POST['getAge'];
    $email = $_POST['getEmail'];
    $contact = $_POST['getContact'];
    $profile = $_FILES['getImageProfile']['name'];

    if($profile == '') {

        $sql = "UPDATE tbl_employees SET firstname = '$fname', middlename = '$mname', lastname = '$lname', gender = '$gender', birthday = '$bday', age = '$age', email = '$email', contact = '$contact' WHERE employee_id = $id";


        if(!mysqli_query($connect, $sql)){
            echo "Unsuccessfully!".mysqli_error($connect);
            header("Location: ../index.php?updated=false");
        } else {
            header("Location: ../index.php?updated=false");
        }

    } else {


            
        $sql_selectAll = "SELECT * FROM tbl_employees WHERE employee_id = $id";

        $result = mysqli_query($connect, $sql_selectAll);
        $row = mysqli_fetch_assoc($result);

        if(unlink("uploaded_profile/".$row["profile"])) {

            $target_dir = "uploaded_profile/";
            $target_file = $target_dir . basename($_FILES["getImageProfile"]["name"]);

            if (move_uploaded_file($_FILES["getImageProfile"]["tmp_name"], $target_file)) {
            

                $sql2 = "UPDATE tbl_employees SET profile = '$profile', firstname = '$fname', middlename = '$mname', lastname = '$lname', gender = '$gender', birthday = '$bday', age = '$age', email = '$email', contact = '$contact' WHERE employee_id = $id";


                if(!mysqli_query($connect, $sql2)){
                    echo "Unsuccessfully!".mysqli_error($connect);
                    header("Location: ../index.php?updated=false");
                } else {
                    header("Location: ../index.php?updated=true");
                }

            }

        }

       


    }

    
    


?>
