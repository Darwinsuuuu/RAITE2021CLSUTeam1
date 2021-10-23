<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "clsu_one";

    $connect = mysqli_connect($server, $username, $password, $db);

    if(!$connect) {
        die("There's a problem connecting to the internet!");
    }

?>