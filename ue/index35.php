<?php include 'common.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>UI/UX Designing | Your University</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="assets/css/layout.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/styles33.css" />
  </head>
  <body>

<?php renderLayoutStart(); ?>

    <section class="course-hero">
      <div class="course-hero-left">
        <div class="breadcrumb">
          Home &gt; Courses &gt; UI/UX Designing
        </div>

        <h1>UI/UX Designing</h1>

        <p class="hero-subtext">
          Learn to design user-friendly, visually appealing, and modern digital experiences for websites and mobile applications.
        </p>

        <div class="hero-badges">
          <span class="hero-badge">Duration: 3 Months</span>
          <span class="hero-badge">Level: Matric or Above</span>
          <span class="hero-badge">Mode: On-Campus</span>
        </div>

        <button
          class="btn-apply-hero" onclick="window.location.href = 'register.html'">
          Apply for This Course
        </button>
      </div>
    </section>

    <section class="course-overview">
      <div class="overview-inner">
        <div class="overview-text">
          <h2>Course Overview</h2>
          <p>
            This course provides a strong foundation in UI/UX design, focusing on creating intuitive and engaging user experiences.
          </p>
          <p>
            Students will learn how to design interfaces, understand user behavior, and create visually appealing layouts using industry-standard tools.
          </p>
        </div>

        <div class="overview-image">
          <img src="assets/img/webb.PNG" alt="Overview image" />
        </div>
      </div>
    </section>

    <section class="course-learn">
      <h2 class="section-heading">What You Will Learn</h2>

      <div class="learn-grid">
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Introduction to UI/UX Design</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>User Research & Personas</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Wireframing & Prototyping</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Design Principles & Color Theory</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>UI Tools (Figma/Adobe XD)</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Usability Testing Basics</span>
        </div>
      </div>
    </section>

    <section class="enroll-structure">
      <div class="enroll-box">
        <h2>Who Should Enroll</h2>

        <div class="enroll-row">
          <span class="enroll-icon">🎓</span>
          <div>
            <b>Eligibility Criteria</b>
          </div>
        </div>

        <ul class="check-list">
          <li>Matric/Above</li>
          <li>DOMICILE / CNIC</li>
          <li>No Age Limit</li>
        </ul>
      </div>

      <div class="structure-box">
        <h2>Course Structure</h2>
        <ol>
          <li><b>Module 1</b> Introduction to UI/UX</li>
          <li><b>Module 2</b> User Research & Analysis</li>
          <li><b>Module 3</b> Wireframing & Prototyping</li>
          <li><b>Module 4</b> Visual Design & UI Elements</li>
          <li><b>Module 5</b> Design Tools & Projects</li>
          <li><b>Module 6</b> Final Project & Portfolio</li>
        </ol>
      </div>
    </section>

    <section class="learning-method">
      <h2>Learning Methodology</h2>
      <p>
        Students will work on real-world design projects and create their own UI/UX portfolio.
        Hands-on practice with design tools and user-centered design techniques will be provided.
      </p>
    </section>

    <section class="bottom-cta">
      <div class="bottom-cta-inner">
        <h2>Ready to Start Your UI/UX Designing Journey?</h2>

        <div class="bottom-cta-buttons">
          <button
            class="btn-apply-cta" onclick="window.location.href = 'register.html'">
            Apply Now
          </button>
          <a href="index3.html" class="btn-view-courses">View All Courses</a>
        </div>
      </div>
    </section>

<?php renderLayoutEnd(); ?>

    <script src="assets/js/common.js"></script>
    <script src="assets/js/cpages.js"></script>
  </body>
</html>