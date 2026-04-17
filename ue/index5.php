<?php include 'common.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Contact Us | Your University</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <link rel="stylesheet" href="assets/css\layout.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/styles5.css" />
</head>

<body>
  <?php renderLayoutStart(); ?>
  <section class="contact-hero">
    <div class="contact-hero-overlay"></div>

    <div class="contact-hero-inner">
      <div class="contact-hero-text">
        <div class="contact-breadcrumb-pill">
          Home &gt; Contact
        </div>

        <h1>Contact Us</h1>
        <p class="contact-hero-subtitle">
          We’re here to help and guide you.
        </p>
      </div>

    </div>
  </section>

  <!-- ========= MAIN CONTENT ========= -->
  <main class="contact-main">

    <!-- Get in Touch cards -->
    <section class="contact-grid-section">
      <h2 class="section-heading">Get in Touch</h2>

      <div class="contact-grid">

        <!-- Address -->
        <div class="contact-card">
          <div class="contact-card-icon">📍</div>
          <div class="contact-card-body">
            <h3>Address</h3>
            <p>University of Education Campus Vehari</p>
            <p>[Department / Program Name]</p>
            <!-- <p>University Address</p> -->
          </div>
        </div>

        <!-- Phone 1 -->
        <div class="contact-card">
          <div class="contact-card-icon">📞</div>
          <div class="contact-card-body">
            <h3>Phone</h3>
            <p>+92-067-3200704</p>
          </div>
        </div>

        <!-- Phone 2 -->
        <div class="contact-card">
          <div class="contact-card-icon">📞</div>
          <div class="contact-card-body">
            <h3>Phone</h3>
            <p>+92-067-3200704</p>
          </div>
        </div>

        <!-- Email + Office hours -->
        <div class="contact-card">
          <div class="contact-card-icon">✉️</div>
          <div class="contact-card-body">
            <h3>Email</h3>
            <p>euevehari123@gmail.com.edu.pk</p>
            <h3 class="mt-10">Office Hours</h3>
            <p>Monday – Friday</p>
            <p>Saturaday– Sunday</p>
            <p>9:00 AM – 5:00 PM</p>
          </div>
        </div>

      </div>
    </section>
    <br>
    <br>

    <section class="contact-form">
     
      <div class="form-s">
        <h3>Contact us</h3>

        <form class="contact-form" action="backend/contact_action.php" method="post"> 
               <?php if (isset($_GET['success'])) { ?>
        <p style="color: green; text-align:center;">
          Message sent successfully!
        </p>
      <?php } ?>
          <label>
            Full Name
            <input type="text" name="name" placeholder="Full Name" required />
          </label>

          <label>
            Email Address
            <input type="email" name="email" placeholder="Email Address" required />
          </label>

          <label>
            Phone Number
            <input type="text" name="phone" placeholder="Phone Number" />
          </label>

          <label>
            Subject
            <input type="text" name="subject" placeholder="Subject" />
          </label>

          <label>
            Message
            <textarea name="message" rows="4" placeholder="Write your message here..."></textarea>
          </label>

          <div class="form-buttons">
            <button type="submit" class="btn-send">Send a Message</button>
            <a href="index3.php" class="btn-view">View Courses</a>
          </div>
        </form>
      </div>

    </section>

  </main>
  <a href="backend/view_messages.php" class="btn-view">View Messages</a>
  <!-- ========= BOTTOM CTA ========= -->
  <section class="contact-bottom-cta">
    <div class="contact-bottom-inner">
      <h2>We’d Love to Hear From You</h2>
      <p>
        If your question is not answered here, please contact us for further guidance.
      </p>
    </div>
  </section>
  <?php renderLayoutEnd(); ?>
  <script src="assets/js/common.js"></script>
  <script src="assets/js/contact.js"></script>
</body>

</html>