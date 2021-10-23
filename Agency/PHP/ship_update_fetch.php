<?php

include "../config/connection.php";

$ship_id = $_POST["ship_id"];

$sql = "SELECT `ship_id`, `ship_name`, `ship_height`, `ship_breadth`, `total_weight`, `ship_draught`, `max_weight` FROM `ships` WHERE `ship_id`=" . $ship_id;

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
}


