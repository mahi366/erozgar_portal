<?php
$conn = mysqli_connect("localhost", "root", "", "ue");

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>