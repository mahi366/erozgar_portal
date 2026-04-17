<?php session_start(); 
if(!isset($_SESSION['reset_email'])) { header("Location: forgot-password.php"); exit(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="assets/css/styles7.css">
</head>
<body>
    <div class="card" style="max-width: 400px; margin: 80px auto; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <h2 style="text-align: center;">Set New Password</h2>
        <p style="text-align: center; color: #666;">Email: <b><?php echo $_SESSION['reset_email']; ?></b></p>
        
        <form action="backend/reset_action.php" method="POST">
            <label>New Password</label>
            <input type="password" name="new_pass" required style="width: 100%; padding: 10px; margin: 10px 0;">
            
            <label>Confirm Password</label>
            <input type="password" name="confirm_pass" required style="width: 100%; padding: 10px; margin: 10px 0;">
            
            <button type="submit" class="btn" style="width: 100%; background: #007bff; color: white; padding: 12px; border: none; margin-top: 10px;">
                Update Password
            </button>
        </form>
    </div>
</body>
</html>