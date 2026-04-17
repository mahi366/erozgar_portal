<?php include 'common.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Success Stories | Your University</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <link rel="stylesheet" href="assets/css/layout.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/styles4.css" />
</head>
<body>
<?php renderLayoutStart(); ?>

  <section class="ss-hero">
    <div class="ss-hero-overlay"></div>

    <div class="ss-hero-inner">
      <div class="ss-hero-text">
        <div class="ss-breadcrumb-pill">
          Home &gt; Success Stories
        </div>

        <h1>Success Stories</h1>
        <p class="ss-hero-subtitle">
          A structured, student-centered approach to skill development.
        </p>
      </div>
     </section>
<br>
<br>
<br>
  <section class="ss-highlights">
    <h2 class="ss-section-title">Student Success Highlights</h2>

    <div class="ss-stories-grid">


      <article class="ss-story-card">
        <div class="ss-story-header">
          <div class="ss-story-number">1</div>
          <span class="ss-story-label">Student Story 1</span>
        </div>

        <div class="ss-story-body">
          <div class="ss-story-image">
            <img src="story1.jpg" alt="Ahmed Ali" />
          </div>

          <div class="ss-story-text">
            <h3>Ahmed Ali</h3>
            <p class="ss-meta">
              Department: Computer Science
            </p>
            <p class="ss-meta">
              <b>Course Completed:</b> Web Development
            </p>
            <p>
              Ahmed joined the training program as a beginner and developed strong web
              development skills through hands-on projects. After successfully finishing,
              he started working on freelance projects and improved his professional confidence.
            </p>
          </div>
        </div>
      </article>


      <article class="ss-story-card">
        <div class="ss-story-header">
          <div class="ss-story-number">2</div>
          <span class="ss-story-label">Student Story 2</span>
        </div>

        <div class="ss-story-body">
          <div class="ss-story-image">
            <img src="story2.jpg" alt="Ayesha Khan" />
          </div>

          <div class="ss-story-text">
            <h3>Ayesha Khan</h3>
            <p class="ss-meta">
              Department: Business Administration
            </p>
            <p class="ss-meta">
              <b>Course Completed:</b> Digital &amp; Social Media Marketing
            </p>
            <p>
              Ayesha learned digital marketing strategies and social media management
              during the training. She is now managing social media pages for small
              businesses and applying her skills in real-world marketing campaigns.
            </p>
          </div>
        </div>
      </article>

      <article class="ss-story-card">
        <div class="ss-story-header">
          <div class="ss-story-number green">3</div>
          <span class="ss-story-label">Student Story 3</span>
        </div>

        <div class="ss-story-body">
          <div class="ss-story-image">
            <img src="story3.jpg" alt="Muhammad Usman" />
          </div>

          <div class="ss-story-text">
            <h3>Muhammad Usman</h3>
            <p class="ss-meta">
              Department: Arts &amp; Design
            </p>
            <p class="ss-meta">
              <b>Course Completed:</b> Graphic Designing
            </p>
            <p>
              Usman enhanced his creative and technical design skills through practical
              design projects. After completion, he started creating branding and social
              media designs for clients and local businesses.
            </p>
          </div>
        </div>
      </article>

    </div>
  </section>

  <section class="ss-impact">
    <div class="ss-impact-inner">

      <div class="ss-impact-box" >
        <h3>Impact on Students</h3>
        <ul>
          <li>Develop practical and market-relevant skills</li>
          <li>Gain confidence through hands-on learning</li>
          <li>Explore freelancing and internship opportunities</li>
        </ul>
      </div>

  </section>


  <section class="ss-testimonials">
    <h3>What Our Students Say</h3>

    <div class="ss-testimonial-list">

      <article class="ss-quote">
        <span class="ss-quote-mark">“</span>
        <p>
          The training helped me understand real-world skills that are not usually
          covered in regular classes. It gave me confidence to work professionally.
        </p>
      </article>

      <article class="ss-quote">
        <span class="ss-quote-mark">“</span>
        <p>
          The practical projects and instructor guidance made learning easy and
          effective. I can now apply my skills directly to client work.
        </p>
      </article>

    </div>
  </section>

  
  <section class="ss-bottom-cta">
    <div class="ss-bottom-cta-inner">
      <h2>Start Your Journey Toward Success</h2>

      <div class="ss-bottom-cta-buttons">
      <button class="btn-apply-cta" onclick="window.location.href='register.html'">Apply Now</button>
        <a href="index3.html" class="btn-view-courses">View Courses</a>
      </div>
    </div>
  </section>
  <?php renderLayoutEnd(); ?>
    <script src="assets/js/common.js"></script>
    <script src="assets/js/success.js"></script>
  </body>
</html>