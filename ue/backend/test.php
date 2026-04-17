<?php
include 'config.php';

$password = password_hash("1234", PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (cnic, password, role) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $cnic, $password, $role);

$cnic = "12345-1234567-1";
$role = "student";

$stmt->execute();

echo "User added";
?>