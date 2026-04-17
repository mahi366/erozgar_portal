<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $cnic = mysqli_real_escape_string($conn, $_POST['cnic']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $addr = mysqli_real_escape_string($conn, $_POST['address']);
    $course = mysqli_real_escape_string($conn, $_POST['course_name']);
    $gender = $_POST['gender'];

    $sql = "INSERT INTO users (full_name, cnic, email, password, address, course_name, gender, role) 
            VALUES ('$name', '$cnic', '$email', '$pass', '$addr', '$course', '$gender', 'student')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Account Created!'); window.location='login.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>