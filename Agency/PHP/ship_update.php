<?php

include "../config/connection.php";

$ship_name = $_POST["ship_name"];
$ship_height = $_POST["ship_height"];
$ship_breadth = $_POST["ship_breadth"];
$total_weight = $_POST["total_weight"];
$ship_draught = $_POST["ship_draught"];
$max_weight = $_POST["max_weight"];

$sql = "UPDATE `ships` SET `ship_name`='$ship_name',`ship_height`=$ship_height,`ship_breadth`=$ship_breadth,`total_weight`=$total_weight,`ship_draught`=$ship_draught,`max_weight`=$max_weight WHERE " . $_POST["ship_id"];

mysqli_query($conn, $sql);

if (!mysqli_query($conn, $sql)) {
    echo "failed to update ship\n";
    echo $sql . "\n";
    echo mysqli_error($conn) . "\n";
}
