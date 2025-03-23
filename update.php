<?php

include "config.php";

$id = $_POST['id'];
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];

$sql = "update ajaxcrud 
        set firstName = '{$first_name}', lastName = '{$last_name}' where id = $id";


if(mysqli_query($conn, $sql)) {
    echo 1;
}
else {
    echo 0;
}


mysqli_close($conn);