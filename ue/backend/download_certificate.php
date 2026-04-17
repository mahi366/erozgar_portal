<?php
session_start();
include('db.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}

$user_email = $_SESSION['user_email'] ?? '';

$query = "SELECT * FROM certificates WHERE student_email = '$user_email' LIMIT 1";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $cert = mysqli_fetch_assoc($result);

    $student_name = $_SESSION['user_name'] ?? 'Student Name';
    $course_name = $cert['course_name'] ?? 'Course Name';
    $from_date = date("d M Y", strtotime($cert['from_date']));
    $to_date = date("d M Y", strtotime($cert['to_date']));
    $issue_date = date("d M Y", strtotime($cert['issue_date']));
} else {
    die("Certificate not found");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Certificate</title>

<style>
body{
    margin:0;
    background: #e5eff9;;
    font-family:Arial;
}

/* CERT BOX */
.cert{
    width:1100px;
    height:600px;
    margin:30px auto;
    background:white;
    position:relative;
    padding:60px 80px;
    box-shadow:0 0 20px rgba(0,0,0,0.2);
    text-align:center;
  border: 12px solid #53ab70;
 border-radius: 20px;
}
/* SIDE COLORS */
.cert::before{
    content:"";
    position:absolute;
    left:0;
    top:50%;
    width:120px;
    height:50%;
    background:gray;
}

.cert::after{
    content:"";
    position:absolute;
    right:0;
    bottom:50%;
    width:120px;
    height:50%;
    background:gray;
}


.ribbon {
    position: absolute;
    left: 130px;
    top: 0;
    width: 170px;
    height: 250px;
    background: #d1d5db;
    clip-path: polygon(0 0, 100% 0, 100% 80%, 50% 100%, 0 80%);
    text-align: center;
    padding-top: 40px;
    font-weight: bold;
    font-size: 20px;
}


/* SUB TITLE */
.sub{
    font-size:30px;
    margin-top:80px;
}

/* TEXT */
.text{
    font-size:20px;
    margin-top:25px;
}

/* NAME */
.name{
    font-size:40px;
    font-weight:bold;
    margin-top:20px;
}

/* UNDERLINE */
.underline{
    width:400px;
    height:2px;
    background:black;
    margin:5px auto 20px auto;
}

/* COURSE */
.course{
    font-weight: bold;
    font-size:20px;
    margin-top:20px;
}

/* DATES ROW */
.dates{
    margin-top: 30px;
    text-align: center;
    font-size:20px;
    padding:0 120px;
}

/* CENTER TEXT */
.center{
    font-size:20px;
    margin-top: 40px;
}

/* FOOTER */
.footer{
    position:absolute;
    bottom:60px;
    width:85%;
    display:flex;
    justify-content:space-between;
    left:7.5%;
    font-size:20px;
}

/* SIGN LINE */
.line{
    width:400px;
    border-top:2px solid black;
    margin-left: 50px;
    margin-right: 50px;
}

/* PRINT BUTTON */
.btn{
    display:block;
    margin:20px auto;
    padding:10px 20px;
    background:#1d4ed8;
    color:white;
    border:none;
    cursor:pointer;
    font-size:16px;
}

.btn:hover{
    background:#0f3bbf;
}

/* PRINT */
@media print{
    .btn{
        display:none;
    }
    body{
        background:white;
    }
}
</style>
</head>

<body>

<div class="cert">

    <div class="ribbon">
     <p>COMPLETION<br>CERTIFICATE</p>
     <img src="assets/img/clogo.PNG" atl="hh"/>
    </div>

    <div class="sub">ERozgar Program - UE Vehari</div>

    <div class="text">This is proudly presented to</div>

    <div class="name"><?php echo $student_name; ?></div>

    <div class="underline"></div>

    <div class="text">Has successfully completed training in</div>

    <div class="course"><?php echo $course_name; ?></div>

    <div class="dates">
        <div><b>FROM:</b> <u><?php echo $from_date; ?></div></u> 
        <div><b>To:</b> <u><?php echo $to_date; ?></div></u>
    </div>

    <div class="center"> University of Education, Vehari Campus Center</div>

    <div class="footer">
        <div>
            <div class="line"></div>
            Campus Director
        </div>

        <div>
            <div class="line"></div>
            Director General
        </div>
    </div>

</div>

<button class="btn" onclick="window.print()">Print / Save PDF</button>

</body>
</html>