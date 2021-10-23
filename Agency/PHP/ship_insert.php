<?php

include "../config/connection.php";

$ship_name=$_POST["ship_name"];
$ship_height=$_POST["ship_height"];
$ship_breadth =$_POST["ship_breadth"];
$total_weight =$_POST["total_weight"];
$ship_draught =$_POST["ship_draught"];
$max_weight = $_POST["max_weight"];


$sql ="INSERT INTO `ships`(`ship_id`, `ship_name`, `ship_height`, `ship_breadth`, `total_weight`, `ship_draught`, `max_weight`) VALUES (null,'$ship_name','$ship_height','$ship_breadth','$total_weight','$ship_draught','$max_weight')";

if (!mysqli_query($conn, $sql)) {
    echo "failed to insert ship route\n";
    echo $sql . "\n";
    echo mysqli_error($conn) . "\n";
}
