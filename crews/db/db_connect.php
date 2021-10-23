<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "clsu_team1";

    $connect = mysqli_connect($server, $username, $password, $db);

    if(!$connect) {
        die("There's a problem connecting to the internet!");
    }

?>