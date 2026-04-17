<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/register.css">
</head>
<body>
  <div class="card">
    <h2>Create Your Account</h2>
    <form action="backend/register_action.php" method="POST">
      <label>Full Name</label>
      <input type="text" name="full_name" placeholder="Enter full name" required>

      <label>CNIC Number</label>
      <input type="text" name="cnic" placeholder="12345-1234567-1" required>

      <label>Email</label>
      <input type="email" name="email" placeholder="Enter email" required>

      <label>Password</label>
      <input type="password" name="password" placeholder="Create Password" required>

      <label>Address</label>
      <input type="text" name="address" placeholder="Enter address">

      <label>Course Name</label>
      <input type="text" name="course_name" placeholder="Enter course name">

      <label>Gender</label>
      <select name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>

      <button class="btn" type="submit">Register</button>
    </form>
  </div>
  <script src="assest/js/register.js"></script>
</body>
</html>