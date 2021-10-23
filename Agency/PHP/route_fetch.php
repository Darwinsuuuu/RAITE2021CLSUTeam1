<?php

include "../config/connection.php";

$sql = "SELECT `route_id`, `country`, `port_name`, `distance`, `price` FROM `ship_routes`";

$result = mysqli_query($conn, $sql);


if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>
                <td>{$row['country']}</td>
                <td>{$row['port_name']}</td>
                <td>{$row['distance']}</td>
                <td>{$row['price']}</td>
                <td>
                    <button value='{$row['route_id']}' class='edit btn bg-none text-seaferer'><i class='bi bi-pencil-square'></i> Edit</button>

                    <button value='{$row['route_id']}' class='delete btn bg-none text-seaferer'><i class='bi bi-trash'></i></i> Delete</button>
                </td>
            </tr>";
    }
}