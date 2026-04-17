<?php include 'common.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>E-Commerce | Your University</title>
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
          Home &gt; Courses &gt; E-Commerce
        </div>

        <h1>E-Commerce</h1>

        <p class="hero-subtext">
          Learn how to start, manage, and grow your own online business using modern e-commerce platforms and strategies.
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
            This course introduces students to the fundamentals of e-commerce, enabling them to create and manage online stores.
          </p>
          <p>
            Students will learn how to sell products online, handle payments, manage orders, and apply digital marketing strategies to grow their business.
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
          <span>Introduction to E-Commerce</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Online Store Setup</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Product Listing & Management</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Payment Gateways & Order Handling</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Digital Marketing Basics</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Store Optimization & Growth Strategies</span>
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
          <li><b>Module 1</b> Introduction to E-Commerce</li>
          <li><b>Module 2</b> Store Setup & Platforms</li>
          <li><b>Module 3</b> Product Management</li>
          <li><b>Module 4</b> Payments & Order Processing</li>
          <li><b>Module 5</b> Marketing & Sales Strategies</li>
          <li><b>Module 6</b> Final Store Project & Launch</li>
        </ol>
      </div>
    </section>

    <section class="learning-method">
      <h2>Learning Methodology</h2>
      <p>
        Students will create their own online store and work on real-world business scenarios.
        Practical training on store setup, product management, and live selling techniques will be provided.
      </p>
    </section>

    <section class="bottom-cta">
      <div class="bottom-cta-inner">
        <h2>Ready to Start Your E-Commerce Journey?</h2>

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