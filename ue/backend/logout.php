<?php
session_start(); // Pehle session access karein

// Saare session variables ko khatam karein
session_unset();

// Session ko mukammal taur par destroy karein
session_destroy();

// User ko login page par wapas bhej dein
header("Location: ../login.php");
exit();
?>