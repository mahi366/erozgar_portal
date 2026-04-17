<?php
// backend/view_messages.php

$conn = new mysqli("localhost", "root", "", "UE");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Database se saaray messages nikalne ka code
$sql = "SELECT * FROM contact_messages ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Messages</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #f4f4f9; }
        table { width: 100%; border-collapse: collapse; background: white; margin-top: 20px; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #102a6b; color: white; }
        h2 { color: #102a6b; }
    </style>
</head>
<body>

    <h2>Messages that are sent</h2>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>

        <?php
        // Agar database mein messages hain, to unhein table mein dikhao
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["subject"] . "</td>";
                echo "<td>" . $row["message"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Abhi tak koi message nahi aaya.</td></tr>";
        }
        $conn->close();
        ?>
    </table>

</body>
</html>