<?php
session_start();
include 'db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Connection check karein (taake crash na ho)
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Form se data pakrein
    $email = mysqli_real_escape_string($conn, $_POST['student_email']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $issue_date = $_POST['issue_date'];
    
    $admin_id = $_SESSION['user_id'] ?? 0; 

    // 1. Check karein kya student registered hai
    $check_user = "SELECT * FROM users WHERE email = '$email' AND role = 'student'";
    $user_result = mysqli_query($conn, $check_user);

    if ($user_result && mysqli_num_rows($user_result) > 0) {
        
        // 2. Certificate issue/insert karein
        $insert_query = "INSERT INTO certificates (student_email, course_name, from_date, to_date, issue_date, issued_by) 
                         VALUES ('$email', '$course', '$from_date', '$to_date', '$issue_date', '$admin_id')";
        
        if (mysqli_query($conn, $insert_query)) {
            echo "<script>alert('Success: Certificate Issued!'); window.location='../index7.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // Agar email galat ho ya student na ho
        echo "<script>alert('Error: Student email nahi mili!'); window.location='../index7.php';</script>";
    }
}
?>