<?php

include "config.php";

$fname = mysqli_real_escape_string($conn, $_POST['firstName']);
$lname = mysqli_real_escape_string($conn, $_POST['lastName']);

$sql = "insert into ajaxcrud (firstName, lastName) Values ('{$fname}', '{$lname}')";

if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}

mysqli_close($conn);
