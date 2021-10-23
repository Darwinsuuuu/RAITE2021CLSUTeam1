<?php

include "../config/connection.php";

$route_id = $_POST["route_id"];

$sql = "SELECT * FROM `ship_routes` WHERE `route_id`=" . $route_id;

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
}
