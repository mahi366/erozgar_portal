<?php include 'common.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Course Title | Your University</title>
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
          Home &gt; Courses &gt; Web Development
        </div>

        <h1>Web Development</h1>

        <p class="hero-subtext">
          Learn to build modern, responsive, and professional websites using
          latest technologies.
        </p>

        <div class="hero-badges">
          <span class="hero-badge">Duration: 3 Months</span>
          <span class="hero-badge">Level: Matric or Above </span>
          <span class="hero-badge">Mode: On-Campus </span>
        </div>

        <button
          class="btn-apply-hero"onclick="window.location.href = 'register.html'">Apply for This Course
        </button>
      </div>
    </section>

  
    <section class="course-overview">
      <div class="overview-inner">
        <div class="overview-text">
          <h2>Course Overview</h2>
          <p>
            This course is designed to provide students with a strong foundation
            in web development. It focuses on both front-end and basic back-end
            concepts through hands-on practice and real-world projects.
          </p>
          <p>
            Students will learn how to design, develop, and deploy websites that
            meet industry standards and follow best practices.
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
          <span>HTML5 &amp; CSS3 Fundamentals</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Responsive Web Design</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>JavaScript Basics</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Front-End Frameworks (Intro)</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Basic Back-End Concepts</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Website Deployment Basics</span>
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
          <li> Matric/Above</li>
          <li>DOMICILE/ CNIC</li>
          <li>NO Age Limit</li>
        </ul>
      </div>


      <div class="structure-box">
        <h2>Course Structure</h2>
        <ol>
          <li><b>Module 1</b> Introduction &amp; Setup</li>
          <li><b>Module 2</b> HTML &amp; Semantic Structure</li>
          <li><b>Module 3</b> CSS Layout &amp; Responsive Design</li>
          <li><b>Module 4</b> JavaScript Fundamentals</li>
          <li><b>Module 5</b> Simple Web App Project</li>
          <li><b>Module 6</b> Final Project &amp; Deployment</li>
        </ol>
      </div>
    </section>

    <!-- ========= LEARNING METHODOLOGY ========= -->
    <section class="learning-method">
      <h2>Learning Methodology</h2>
      <p>
       Each student creates their own demo website project. 
       Domain and hosting concepts are explained during the class,
       and a live website deployment demo is also provided.
      </p>
    </section>

    <section class="bottom-cta">
      <div class="bottom-cta-inner">
        <h2>Ready to Start Your Web Development Journey?</h2>

        <div class="bottom-cta-buttons">
          <button
            class="btn-apply-cta"onclick="window.location.href = 'register.html'" >
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
