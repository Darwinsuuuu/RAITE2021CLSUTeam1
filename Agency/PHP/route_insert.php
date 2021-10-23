<?php

include "../config/connection.php";

$country = escape($_POST["country"]);
$port_name = escape($_POST["port_name"]);
$distance = $_POST["distance"];
$price =  $_POST["price"];

$sql = "INSERT INTO `ship_routes`(`route_id`, `country`, `port_name`, `distance`, `price`) VALUES (null,'$country','$port_name','$distance','$price')";


if (!mysqli_query($conn, $sql)) {
    echo "failed to insert ship route\n";
    echo $sql . "\n";
    echo mysqli_error($conn) . "\n";
}
