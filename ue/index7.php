<?php
session_start();
include('backend/db.php'); 

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_role = $_SESSION['user_role'] ?? '';
$user_email = $_SESSION['user_email'] ?? ''; 
$user_name = $_SESSION['user_name'] ?? 'User';

$has_certificate = false;
$cert_details = null;

// DEBUG: Agar button nahi dikh raha toh ye check karne ke liye hai
echo "User Email: " . $user_email; 

if ($user_role == 'student' && !empty($user_email)) {
    // Database se exact match dhoondein
    $query = "SELECT * FROM certificates WHERE student_email = '$user_email' LIMIT 1";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $has_certificate = true;
        $cert_details = mysqli_fetch_assoc($result);
    }
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Certificate | eRozgar UE Vehari</title>
  <link rel="stylesheet" href="assets/css/styles7.css"/>
</head>
<body>

  <div class="page">
    <div class="topbar">
      <a href="index.php">← Back to Website</a>
      <a href="backend/logout.php" class="logout">Logout (<?php echo $_SESSION['user_name']; ?>)</a>
    </div>

    <div class="card">
      <div class="left">
        <img class="cert-img" src="assets/img/certificate.PNG" alt="Certificate Template"/>
      </div>

      <div class="right">
        <div class="brand">
          <img src="assets/img/erozgar.jpeg" alt="UE">
        </div>

        <h1>Certificate </h1>
        <p class="sub">Download / Issue certificate from here.</p>
        <div class="msg" id="msg"></div>

        <?php if ($user_role == 'student'): ?>
        <div id="studentBox" class="box">
          <h3>My Certificate</h3>
          
          <?php if ($has_certificate): ?>
              <p id="studentInfo" style="color: green; font-weight: bold;">
                  Congratulations <?php echo $_SESSION['user_name']; ?>!<br>
                  Your certificate for <strong><?php echo $cert_details['course_name']; ?></strong> is ready.
              </p>
              
              <a href="backend/download_certificate.php" class="btn" style="text-decoration: none; display: inline-block; text-align: center;">Download Certificate</a>
          
          <?php else: ?>
              <p id="studentInfo" style="color: red;">
                  Your certificate has not been issued yet. Please contact the administration.
              </p>
          <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php if ($user_role == 'admin'): ?>
        <div id="adminBox" class="box">
          <h3>Admin: Issue Certificate</h3>

          <form action="backend/certificate_issue.php" method="post" class="form">
            <label>Student Email
              <input type="email" name="student_email" required placeholder="student@email.com">
            </label>

            <label>Course Name
              <select name="course" required>
                <option value="Web Development">Web Development</option>
                <option value="Graphic Designing">Graphic Designing</option>
                <option value="Digital Marketing">Digital Marketing</option>
                <option value="E-Commerce">E-Commerce</option>
                <option value="MS Office">MS Office</option>
                <option value="WordPress">WordPress</option>
                <option value="Data Analysis With Python">Data Analysis With Python</option>
              </select>
            </label>

            <label>From Date
              <input type="date" name="from_date" required>
            </label>

            <label>To Date
              <input type="date" name="to_date" required>
            </label>

            <label>Issue Date
              <input type="date" name="issue_date" required>
            </label>

            <button class="btn" type="submit">Issue Certificate</button>
          </form>
        </div>
        <?php endif; ?>

      </div>
    </div>
  </div>

  <script src="assets/js/certificate.js"></script>
</body>
</html>