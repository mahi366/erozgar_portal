<?php include 'common.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Graphic Designing | Your University</title>
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
          Home &gt; Courses &gt; Graphic Designing
        </div>

        <h1>Graphic Designing</h1>

        <p class="hero-subtext">
          Learn to create powerful visual designs for branding, social media,
          print and digital platforms.
        </p>

        <div class="hero-badges">
          <span class="hero-badge">Duration: 3 Months</span>
          <span class="hero-badge">Level: Matric/Above</span>
          <span class="hero-badge">Mode: On-Campus</span>
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
            The Graphic Designing course focuses on developing creative and
            technical skills required to design visuals for digital and print
            media. Students learn how to transform ideas into professional
            designs using industry-standard tools.
          </p>
          <p>
            Through hands-on projects, students practice creating social media
            posts, posters, logos, brand identities, and marketing material that
            meet client and market needs.
          </p>
        </div>

        <div class="overview-image">
          <img src="assets/img/graphic1.PNG" alt="Graphic design overview" />
        </div>
      </div>
    </section>

    <!-- WHAT YOU WILL LEARN -->
    <section class="course-learn">
      <h2 class="section-heading">What You Will Learn</h2>

      <div class="learn-grid">
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Design principles &amp; color theory</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Typography &amp; layout design</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Logo &amp; brand identity design</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Social media &amp; marketing graphics</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Print design basics (flyers, posters)</span>
        </div>
        <div class="learn-item">
          <span class="check-icon">✔</span>
          <span>Creative thinking &amp; visual storytelling</span>
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
          <li><b>Module 1</b> Introduction to Design &amp; Tools</li>
          <li><b>Module 2</b> Color, Typography &amp; Layout</li>
          <li><b>Module 3</b> Branding &amp; Logo Design</li>
          <li><b>Module 4</b> Social Media &amp; Digital Graphics</li>
          <li><b>Module 5</b> Print Media &amp; Marketing Material</li>
          <li><b>Module 6</b> Final Design Project &amp; Portfolio</li>
        </ol>
      </div>
    </section>

    <!-- METHOD -->
    <section class="learning-method">
      <h2>Learning Methodology</h2>
      <p>
       Students work on real design briefs, classroom exercises, 
       and assignments. In each class, the instructor gives a live demo,
       after which students create their own designs. Feedback sessions 
       help improve design thinking and overall quality.
      </p>
    </section>

    <!-- CTA -->
    <section class="bottom-cta">
      <div class="bottom-cta-inner">
        <h2>Start Your Career as a Graphic Designer</h2>

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
