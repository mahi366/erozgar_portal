<?php
// backend/contact_action.php

// 1. Database Connection (Details check kar lein)
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "UE"; // <--- Apne Database ka sahi naam yahan likhein

$conn = new mysqli($servername, $username, $password, $dbname);

// Connection check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Form se data lena
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Data ko safe banana (SQL injection se bachne ke liye)
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // 3. Database mein insert karna
    // Table ka naam 'contact_messages' hona chahiye
    $sql = "INSERT INTO contact_messages (name, email, phone, subject, message) 
            VALUES ('$name', '$email', '$phone', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        // SUCCESS: Wapas index5.php par bhej dena
        // "../" lazmi hai kyunke index5.php bahar wale folder mein hai
        header("Location: ../index5.php?success=1");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>