<?php
session_start();
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Email mil gayi, ab session mein save karke reset page par bhej rahe hain
        $_SESSION['reset_email'] = $email;
        header("Location: ../reset-password.php");
        exit();
    } else {
        echo "<script>alert('Ye email registered nahi hai!'); window.location='../forgot-password.php';</script>";
    }
}
?>