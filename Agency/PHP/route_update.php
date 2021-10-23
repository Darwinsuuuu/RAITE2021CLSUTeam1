<?php

include "../config/connection.php";

$country = escape($_POST["country"]);
$port_name = escape($_POST["port_name"]);
$distance = $_POST["distance"];
$price =  $_POST["price"];


$sql = "UPDATE `ship_routes` SET `country`='$country',`port_name`='$port_name',`distance`='$distance',`price`='$price' WHERE route_id=" . $_POST["route_id"];

mysqli_query($conn, $sql);

if (!mysqli_query($conn, $sql)) {
    echo "failed to update ship route\n";
    echo $sql . "\n";
    echo mysqli_error($conn) . "\n";
}


