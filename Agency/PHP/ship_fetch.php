<?php

include "../config/connection.php";

$sql = "SELECT * FROM `ships`";

$result = mysqli_query($conn, $sql);


if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>
                <td>{$row['ship_name']}</td>
                <td>{$row['ship_height']}</td>
                <td>{$row['ship_breadth']}</td>
                <td>{$row['total_weight']}</td>
                <td>{$row['ship_draught']}</td>
                <td>{$row['max_weight']}</td>
                <td>
                    <button value='{$row['ship_id']}' class='edit btn bg-none text-seaferer'><i class='bi bi-pencil-square'></i> Edit</button>

                    <button value='{$row['ship_id']}' class='delete btn bg-none text-seaferer'><i class='bi bi-trash'></i></i> Delete</button>
                </td>
            </tr>";
    }
}