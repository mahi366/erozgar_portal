<?php include 'common.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Courses | Your University</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/layout.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/styles3.css" />
</head>

<body>
  
  <?php renderLayoutStart(); ?>
  <section class="courses-hero-full">

    <div class="courses-hero-banner">
      <div class="banner-inner">
        <h1>Our Courses</h1>
        <p>Industry-relevant digital skills designed to prepare students for modern careers.</p>
      </div>
    </div>

    <div class="courses-hero-body">
      <section class="explore-section">
        <h2 class="section-heading">Explore Our Digital Skill Courses</h2>

        <div class="courses-grid-container">
          
          <article class="course-card">
            <div class="card-image">
              <img src="assets/img/webb.PNG" alt="Web Development"/>
            </div>
            <div class="card-content">
                <h3>Web Development</h3>
                <p>Build modern websites using HTML, CSS, JavaScript &amp; frameworks.</p>
                <button class="btn-primary-sm" onclick="window.location.href = 'index31.php'">View Details</button>
            </div>
          </article>

          <article class="course-card">
            <div class="card-image">
              <img src="assets/img/graphic.PNG" alt="Graphic Designing" />
            </div>
            <div class="card-content">
                <h3>Graphic Designing</h3>
                <p>Design user-friendly interfaces &amp; engaging digital experiences.</p>
                <button class="btn-primary-sm" onclick="window.location.href = 'index32.php'">View Details</button>
            </div>
          </article>

          <article class="course-card">
            <div class="card-image">
              <img src="assets/img/digital.PNG" alt="Digital Marketing" />
            </div>
            <div class="card-content">
                <h3>Digital Marketing & Media</h3>
                <p>SEO, social media, content &amp; performance marketing skills.</p>
                <button class="btn-primary-sm" onclick="window.location.href = 'index33.php'">View Details</button>
            </div>
          </article>

          <article class="course-card">
            <div class="card-image">
              <img src="assets/img/ecommm.PNG" alt="E-Commerce" />
            </div>
            <div class="card-content">
                <h3>E-Commerce</h3>
                <p>Launch and manage online stores and digital brands.</p>
                <button class="btn-primary-sm" onclick="window.location.href = 'index34.php'">View Details</button>
            </div>
          </article>

          <article class="course-card">
            <div class="card-image">
              <img src="assets/img/ms1.PNG" alt="MS Office" />
            </div>
            <div class="card-content">
                <h3>MS Office</h3>
                <p>Work with global clients and build a freelance career.</p>
                <button class="btn-primary-sm" onclick="window.location.href = 'index35.php'">View Details</button>
            </div>
          </article>

          <article class="course-card">
            <div class="card-image">
              <img src="assets/img/word2.PNG" alt="WordPress" />
            </div>
            <div class="card-content">
                <h3>WordPress</h3>
                <p>Build professional websites easily with WordPress CMS.</p> 
                <button class="btn-primary-sm" onclick="window.location.href = 'index36.php'">View Details</button>
            </div>
          </article>

          <article class="course-card">
            <div class="card-image">
              <img src="assets/img/pppp.PNG" alt="Python" />
            </div>
            <div class="card-content">
                <h3>Data Analysis With Python</h3>
                <p>Learn to analyze complex data sets using Python libraries.</p>
                <button class="btn-primary-sm" onclick="window.location.href = 'index37.php'">View Details</button>
            </div>
          </article>

        </div>
      </section>

      <section class="learn-section">
        <h2 class="section-heading">What You Will Learn</h2>
        <div class="learn-grid">
          <div class="learn-item">
            <span class="learn-icon">🛠️</span>
            <div>
              <h4>Practical Hands-On Skills</h4>
              <p>Build real projects using industry tools.</p>
            </div>
          </div>
          <div class="learn-item">
            <span class="learn-icon">🏢</span>
            <div>
              <h4>Industry-Focused Curriculum</h4>
              <p>Topics aligned with current market needs.</p>
            </div>
          </div>
          <div class="learn-item">
            <span class="learn-icon">📁</span>
            <div>
              <h4>Real Projects &amp; Assignments</h4>
              <p>Hands-on tasks based on real scenarios.</p>
            </div>
          </div>
          <div class="learn-item">
            <span class="learn-icon">🎯</span>
            <div>
              <h4>Career &amp; Freelancing Guidance</h4>
              <p>Mentoring for jobs and freelance work.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="elig-mode-section">
        <div class="info-box">
          <b>Eligibility Criteria</b>
          <ul class="check-list">
            <li> Matric/Above</li>
            <li>DOMICILE/ CNIC</li>
            <li>NO Age Limit</li>
          </ul>
        </div>
        <div class="info-box">
          <h3>Learning Mode</h3>
          <ul>
            <li>On-campus training</li>
            <li>Practical labs</li>
            <li>Mentor support</li>
          </ul>
        </div>
      </section>

      <section class="cta-section">
        <div class="cta-inner">
          <h2>Choose Your Course &amp; Start Learning Today</h2>
          <div class="cta-buttons">
            <button class="btn-apply" onclick="window.location.href = 'register.php'">Apply Now</button>
            <button onclick="window.location.href = 'index5.php'" class="btn-contact">Contact Us</button>
          </div>
        </div>
      </section>
    </div>
  </section>

  <?php renderLayoutEnd(); ?>

  <script src="assets/js/common.js"></script>
  </body>
</html>