<?php include 'common.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home | Your University</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="assets/css/layout.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<?php renderLayoutStart(); ?>

<section class="home-hero">
  <div class="home-text">
    <h1>Empowering University Students<br>With Digital Skills & Career Opportunities</h1>
    <p>Learn in-demand digital skills, start freelancing, and build your professional career while studying.</p>

    <div class="home-buttons">
      <a href="register.php" class="btn primary">Apply Now</a>
      <a href="index3.php" class="btn secondary">View Courses</a>
    </div>
  </div>
</section>

<br><br>

<section class="section section-light">
  <h2 class="section-title" align="center">Why This Program?</h2>

  <div class="card-grid four">
    <article class="info-card">
      <img src="assets/img/computer.jpg" alt="On-Campus Projects" />
      <h3 class="info-title">On-Campus Projects</h3>
      <p class="info-text">Work on real projects within your university ecosystem.</p>
    </article>

    <article class="info-card">
      <img src="assets/img/innn.PNG" alt="Industry Partner Tasks" />
      <h3 class="info-title">Industry Partner Tasks</h3>
      <p class="info-text">Assignments designed in collaboration with industry mentors.</p>
    </article>

    <article class="info-card">
      <img src="assets/img/manw.jpg" alt="Remote Work Skills" />
      <h3 class="info-title">Remote Work Skills</h3>
      <p class="info-text">Skills for remote & freelance work culture.</p>
    </article>

    <article class="info-card">
      <img src="assets/img/computer-lab.jpg" alt="Startup Support" />
      <h3 class="info-title">Startup Support</h3>
      <p class="info-text">Guidance to convert your ideas into startups.</p>
    </article>
  </div>
</section>

<br><br>

<section class="section section-light">
  <h2 class="section-title" align="center">Our Digital Skill Courses</h2>

  <div class="card-grid four">
    <article class="info-card">
      <img src="assets/img/webb.PNG" alt="Web Development" />
      <h3 class="info-title">Web Development</h3>
      <p class="info-text">Front-end & back-end skills to build modern web applications.</p>
    </article>

    <article class="info-card">
      <img src="assets/img/ms.PNG" alt="MS" />
      <h3 class="info-title">MS Office</h3>
      <p class="info-text">Design user-friendly, visually appealing experiences.</p>
    </article>

    <article class="info-card">
      <img src="assets/img/digital.PNG" alt="Digital Marketing"/>
      <h3 class="info-title">Digital Marketing</h3>
      <p class="info-text">Learn SEO, social media and performance marketing.</p>
    </article>

    <article class="info-card">
      <img src="assets/img/ecommm.PNG" alt="E-Commerce" />
      <h3 class="info-title">E-Commerce</h3>
      <p class="info-text">Launch and manage online businesses and brands.</p>
    </article>
  </div>
</section>

<br><br>

<section class="section section-dark">
  <h2 class="section-title section-title-dark" align="center">Career plannings We Support</h2>

  <div class="card-grid three">
    <article class="info-card dark-card">
      <h3 class="info-title">On Campus Projects</h3>
      <p class="info-text">Apply skills on campus with supervised projects.</p>
    </article>

    <article class="info-card dark-card">
      <h3 class="info-title">Industry Tasks</h3>
      <p class="info-text">Work on real tasks from partner companies.</p>
    </article>

    <article class="info-card dark-card">
      <h3 class="info-title">Remote Work Skills</h3>
      <p class="info-text">Prepare yourself for global remote and freelance roles.</p>
    </article>
  </div>
</section>

<?php renderLayoutEnd(); ?>

<script src="assets/js/common.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>