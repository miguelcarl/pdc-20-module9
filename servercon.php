<?php
$dbconnect = mysqli_connect("localhost", "pdc20user", "12345678", "pdc20");
if(mysqli_connect_errno()){
    echo "Failed to connect to Mysqli: ". mysqli_connect_error();
    die();
}
?>