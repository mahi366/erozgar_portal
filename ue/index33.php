<?php include 'common.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Digital Marketing | Your University</title>
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
          Home &gt; Courses &gt; Digital Marketing
        </div>

        <h1>Digital Marketing &amp; Media Marketing</h1>

        <p class="hero-subtext">
          Learn to promote brands, products and services through modern digital
          channels like social media, search and content marketing.
        </p>

        <div class="hero-badges">
          <span class="hero-badge">Duration: 3 Months</span>
          <span class="hero-badge">Level: Matric / Above</span>
          <span class="hero-badge">Mode: On-Campus </span>
        </div>

        <button
          class="btn-apply-hero"
          onclick="window.location.href = 'register.html'">
          Apply for This Course
        </button>
      </div>

    </section>

    <!-- OVERVIEW -->
    <section class="course-overview">
      <div class="overview-inner">
        <div class="overview-text">
          <h2>Course Overview</h2>
          <p>
            The Digital Marketing course prepares students to market businesses
            and personal brands using online platforms. Students learn how to
            plan, run and analyze marketing campaigns.
          </p>
          <p>
            Topics include social media marketing, SEO, content marketing,
            email campaigns and online advertising with a strong focus on
            practical implementation and analytics.
          </p>
        </div>

        <div class="overview-image">
          <img src="assets/img/digital2.PNG" alt="Digital marketing overview" />
        </div>
      </div>
    </section>

    <!-- WHAT YOU WILL LEARN -->
    <section class="course-learn">
      <h2 class="section-heading">What You Will Learn</h2>

      <div class="learn-grid">
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Fundamentals of digital marketing</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Social media marketing strategies</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Search engine optimization (SEO) basics</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Content &amp; email marketing campaigns</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Online advertising (Google &amp; social ads)</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Analytics &amp; performance tracking</span>
        </div>
      </div>
    </section>

    <!-- ENROLL + STRUCTURE -->
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
          <li><b>Module 1</b> Introduction to Digital Marketing</li>
          <li><b>Module 2</b> Social Media Platforms &amp; Strategy</li>
          <li><b>Module 3</b> SEO &amp; Website Optimization Basics</li>
          <li><b>Module 4</b> Content &amp; Email Marketing</li>
          <li><b>Module 5</b> Paid Ads &amp; Analytics</li>
          <li><b>Module 6</b> Final Campaign Project</li>
        </ol>
      </div>
    </section>

    <section class="learning-method">
      <h2>Learning Methodology</h2>
      <p>
       Students work on sample brands and real-world case studies.
       In each module, campaigns are planned, designed, and analyzed through assignments.
       The instructor provides hands-on practice with dashboards, tools, and reports.

      </p>
    </section>

    <section class="bottom-cta">
      <div class="bottom-cta-inner">
        <h2>Launch Your Career in Digital Marketing</h2>

        <div class="bottom-cta-buttons">
          <button
            class="btn-apply-cta"
            onclick="window.location.href = 'register.html'">
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
