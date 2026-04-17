<?php

function renderLayoutStart()
{
    ?>
  <header class="site-header">
  <div class="topbar">
    <div class="topbar-inner">
      <span>Helpline: 067-3200704</span>
      <span class="topbar-separator">♦</span>
      <a href="mailto:erozgarue123@gmail.com">erozgarue123@gmail.com</a>
    </div>
  </div>

  <div class="navbar">
    <div class="navbar-inner">

      <div class="logo-area">
        <a href="index.php" class="logo-wrap">
          <img src="assets\img\erozgar.jpeg" alt="eRozgaar Logo" class="header-logo" />
        </a>
      </div>

      <nav class="nav-menu" id="navMenu">
        <div class="mobile-panel-header">
          <div class="mobile-panel-logo">
            <img src="assets\img\erozgar.jpeg" alt="eRozgaar Logo" class="mobile-logo" />
          </div>

          <button class="mobile-close" id="mobileClose" aria-label="Close Menu">
            &times;
          </button>
        </div>

        <a href="index.php" class="nav-link active">Home</a>
        <a href="index2.php" class="nav-link">About Us</a>
        <a href="index3.php" class="nav-link">Courses</a>
        <a href="index4.php" class="nav-link">Success Stories</a>
        <a href="index5.php" class="nav-link">Contact Us</a>
        <a href="index7.php" class="nav-link">Certificate</a>

        <div class="mobile-auth-buttons">
          <a href="login.php" class="btn btn-login">Login</a>
          <a href="register.php" class="btn btn-register">Register</a>
        </div>
      </nav>

      <div class="header-actions" id="headerActions">
        <a href="login.php" class="btn btn-login">Login</a>
        <a href="register.php" class="btn btn-register">Register</a>
      </div>

      <button class="menu-toggle" id="menuToggle" aria-label="Toggle Menu">☰</button>
    </div>
  </div>

  <div class="mobile-overlay" id="mobileOverlay"></div>
</header>
  
    <?php
}

function renderLayoutEnd()
{
    ?>


  <!-- ===== FOOTER ===== -->
  <footer class="site-footer">
    <div class="footer-wrapper">
      <div class="footer-card">

        <!-- Column 1 -->
        <div class="footer-col footer-brand">
          <div class="brand-logo-wrap">
            <img src="assets\img\erozgar.jpeg" alt="Footer Logo" class="brand-logo" />
          </div>


          <p class="brand-subtitle">An online platform for students to apply, enroll, and earn certified courses through
            the eRozgaar program.</p>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>

        <!-- Column 2 -->
        <div class="footer-col">
          <h4 class="footer-heading">Tracks</h4>
          <ul class="footer-list">
            <li><a href="index31.php">Web Development</a></li>
            <li><a href="index32.php">Graphic Designing</a></li>
            <li><a href="index33.php"">Digital Marketing &amp; Media Marketing</a></li>
            <li><a href="index34.php"">Cyber Security</a></li>
            <li><a href="index35.php"">UI/UX Designing </a></li>
            <li><a href="index36.php"">WordPress</a></li>
            <li><a href="index37.php"">Data Analysis with Python</a></li>
            <li><a href="index38.php"">E Commerce</a></li>
          </ul>
        </div>

        <!-- Column 3 -->
        <div class="footer-col">
          <h4 class="footer-heading">Contact</h4>
          <div class="footer-contact">
            <p>University of Education</p>
            <p>Campus Vehari</p>
            <p class="contact-space">Phone: 067-3200704</p>
            <p><a href="mailto:erozgarue123@gmail.com">erozgarue123@gmail.com</a></p>
          </div>
        </div>

        <!-- Column 4 -->
        <div class="footer-col">
          <h4 class="footer-heading">Support</h4>
          <div class="footer-contact">
            <p><a href="mailto:erozgarue123@gmail.com">erozgarue123@gmail.com</a></p>
            <p>Career Office</p>
          </div>
        </div>

      </div>

      <div class="footer-bottom">
        © 2028 University of Education Campus Vehari - Empowering Students with Digital Skills
      </div>
    </div>
  </footer>

    <?php
}
?>