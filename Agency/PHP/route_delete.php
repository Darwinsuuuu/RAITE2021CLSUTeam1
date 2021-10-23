<?php

include "../config/connection.php";

$sql = "DELETE FROM `ship_routes` WHERE route_id =". $_POST["route_id"];

if (!mysqli_query($conn, $sql)) {
    echo "failed to delete ship route\n";
    echo $sql . "\n";
    echo mysqli_error($conn) . "\n";
}


