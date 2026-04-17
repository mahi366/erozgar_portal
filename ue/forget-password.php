<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="assets/css/styles7.css">
</head>
<body>
    <div class="card" style="max-width: 400px; margin: 80px auto; padding: 30px; text-align: center; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <h2 style="color: #333;">Forgot Password?</h2>
        <p style="color: #666;">Apni registered email likhein taake hum verification kar saken.</p>
        
        <form action="backend/forgot_action.php" method="POST">
            <input type="email" name="email" required placeholder="example@gmail.com" 
                   style="width: 100%; padding: 12px; margin: 20px 0; border: 1px solid #ccc; border-radius: 5px;">
            <button type="submit" class="btn" style="width: 100%; background: #28a745; color: white; padding: 12px; border: none; border-radius: 5px; cursor: pointer;">
                Verify Email
            </button>
        </form>
        <div style="margin-top: 20px;">
            <a href="login.php" style="color: #007bff; text-decoration: none;">← Back to Login</a>
        </div>
    </div>
</body>
</html>