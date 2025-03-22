<?php

include "config.php";

$id = $_POST['id'];

$sql = "delete from ajaxcrud where id = {$id}";

if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}

mysqli_close($conn);
