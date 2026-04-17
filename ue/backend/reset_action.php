<?php
session_start();
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION['reset_email'])) {
       header("Location: ../login.php?msg=updated");
    exit();
    }

    $new_pass = $_POST['new_pass'];
    $confirm_pass = $_POST['confirm_pass'];
    $email = $_SESSION['reset_email'];

    if ($new_pass === $confirm_pass) {
        // Password ko HASH karna (Taki login ke waqt match kar sake)
        $hashed_password = password_hash($new_pass, PASSWORD_DEFAULT);

        $update_query = "UPDATE users SET password = '$hashed_password' WHERE email = '$email'";
        
        if (mysqli_query($conn, $update_query)) {
            // Password change hone ke baad session khatam kar dein
            unset($_SESSION['reset_email']);
            echo "<script>alert('Password successfully update ho gaya!'); window.location='../login.php';</script>";
        } else {
            echo "Error updating password: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Passwords match nahi kar rahe!'); window.history.back();</script>";
    }
}
?>