<?php

include "config.php";

$id = $_POST['id'];

$sql = "select * from ajaxcrud where id = {$id}";

$response = mysqli_query($conn, $sql) or die("query failed");

$output = "";

if (mysqli_num_rows($response) > 0) {

    while ($row = mysqli_fetch_assoc($response)) {

        $output = '<div class="modal-content">
                        <h2>Edit User</h2>
                        <input type="text" placeholder="First Name" id="modal-fname" value="' . $row["firstName"] . '">
                        <input type="hidden" id="user_id" value="' . $row["id"] . '" />
                        <input type="text" placeholder="Last Name" id="modal-lname" value="' . $row["lastName"] . '">
                        <button id="modal-save">Save</button>
                        <button id="close-modal">Close</button>
                    </div>';
    }
} else {
    $output = "<h3>No data found</h3>";
}

echo $output;

mysqli_close($conn);
