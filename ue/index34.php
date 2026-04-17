<?php include 'common.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Cyber Security | Your University</title>
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
          Home &gt; Courses &gt; Cyber Security
        </div>

        <h1>Cyber Security</h1>

        <p class="hero-subtext">
          Learn how to protect systems, networks, and data from cyber threats using modern security techniques.
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
            This course provides a strong foundation in cyber security concepts, focusing on protecting digital systems from attacks and unauthorized access.
          </p>
          <p>
            Students will learn practical skills in identifying vulnerabilities, securing networks, and implementing basic security measures used in the industry.
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
          <span>Introduction to Cyber Security</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Network Security Basics</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Ethical Hacking Fundamentals</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Threats, Attacks & Vulnerabilities</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Data Protection & Encryption Basics</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Security Best Practices</span>
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
          <li><b>Module 1</b> Introduction to Cyber Security</li>
          <li><b>Module 2</b> Networking Fundamentals</li>
          <li><b>Module 3</b> System Security & Protection</li>
          <li><b>Module 4</b> Ethical Hacking Basics</li>
          <li><b>Module 5</b> Security Tools & Techniques</li>
          <li><b>Module 6</b> Final Project & Security Implementation</li>
        </ol>
      </div>
    </section>

    <section class="learning-method">
      <h2>Learning Methodology</h2>
      <p>
        Students will work on real-world security scenarios and practical labs.
        Hands-on demonstrations of common cyber attacks and defense techniques
        will be provided to enhance practical understanding.
      </p>
    </section>

    <section class="bottom-cta">
      <div class="bottom-cta-inner">
        <h2>Ready to Start Your Cyber Security Journey?</h2>

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