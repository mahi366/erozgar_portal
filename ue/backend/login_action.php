<?php
session_start();
include 'db.php'; // Apni database file ka sahi path likhein

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Check if required fields are completely empty
    if (empty(trim($_POST['cnic'])) || empty($_POST['password'])) {
        // Agar khali hain to aage kuch na karo aur wapas bhej do
        echo "<script>alert('Please fill all required fields!'); window.location='../login.php';</script>";
        exit(); // Code ko yahin rokne ke liye
    }

    $cnic = mysqli_real_escape_string($conn, trim($_POST['cnic']));
    $password = $_POST['password'];
    $role = $_POST['role'];

    $query = "SELECT * FROM users WHERE cnic='$cnic' AND role='$role'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        
        // Password verify karna
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_role'] = $user['role'];
            $_SESSION['user_name'] = $user['full_name'];

            // ADD THIS LINE TO FIX LINE 12 IN INDEX7.PHP:
            $_SESSION['user_email'] = $user['email']; 
            
            // Login success hone par dashboard par bhejna
            header("Location: ../index7.php"); 
            exit();
       
        } else {
            echo "<script>alert('Wrong Password'); window.location='../login.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('User not found'); window.location='../login.php';</script>";
        exit();
    }
}
?>