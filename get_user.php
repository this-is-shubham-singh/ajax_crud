<?php

include "config.php";

$sql = "select * from ajaxcrud";

$response = mysqli_query($conn, $sql) or die("query failed");

$output = "";

if (mysqli_num_rows($response) > 0) {

    $output = "<thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>";

    while ($row = mysqli_fetch_assoc($response)) {

        $output .= "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['firstName']}</td>
                        <td>{$row['lastName']}</td>
                        <td><button class='deleteUser' data-id='{$row['id']}'>delete</button></td>
                    </tr>";
    }

    $output .= "</tbody>";

    echo $output;
}

mysqli_close($conn);
