<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>

  <!-- CSS Link -->
  <link rel="stylesheet" href="assets/css/login.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet" />
</head>

<body>

  <!-- Background blobs -->
  <div class="outer-blob ob1"></div>
  <div class="outer-blob ob2"></div>
  <div class="outer-blob ob3"></div>

  <div class="card">

    <div class="brand">
      <div class="brand-text">
        <img src="assets/img/erozgar.jpeG" height="100">
      </div>
    </div>

    <h2 class="subtitle">Welcome back — sign in to continue</h2>

    <?php if (isset($_GET['msg']) && $_GET['msg'] == 'updated'): ?>
    <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 15px; text-align: center; border: 1px solid #c3e6cb;">
        Password updated successfully!.
    </div>
<?php endif; ?>
    <form id="loginForm" action="backend/login_action.php" method="POST">

      <!-- CNIC -->
      <div class="form-group">
        <label for="cnic">CNIC Number</label>
        <div class="input-wrap">
          <input 
            type="text" 
            name="cnic" 
            id="cnic" 
            placeholder="12345-1234567-1" 
            required 
          />
        </div>
      </div>

      <!-- Password -->
      <div class="form-group">
        <label for="password">Password</label>
        <div class="input-wrap">
          <input 
            type="password" 
            name="password" 
            id="password" 
            placeholder="••••••••" 
            required 
          />
        </div>
      </div>

      <!-- Role -->
      <div class="form-group">
        <select name="role" id="role" required>
          <option value="student">Student</option>
          <option value="admin">Admin</option>
        </select>
      </div>

      <a href="forget-password.php" class="forgot">Forgot password?</a>

      <button type="submit" class="btn-signin" id="signInBtn">
        Sign In
      </button>

    </form>

  </div>

  <!-- JS Link -->
  <script src="assets/js/login.js"></script>

</body>
</html>