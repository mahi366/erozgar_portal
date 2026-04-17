// ===============================
// Contact Page JavaScript
// ===============================

document.addEventListener("DOMContentLoaded", function () {

  const form = document.querySelector(".contact-form");

  if (!form) return;

  form.addEventListener("submit", function (e) {
    e.preventDefault(); // page reload rokta hai

    const name = form.querySelector('input[name="name"]').value.trim();
    const email = form.querySelector('input[name="email"]').value.trim();
    const message = form.querySelector('textarea[name="message"]').value.trim();

    // Basic validation
    if (name === "" || email === "" || message === "") {
      alert("Please fill in all required fields.");
      return;
    }

    // Email validation
    if (!validateEmail(email)) {
      alert("Please enter a valid email address.");
      return;
    }

    // Success message (frontend only)
    alert("Thank you! Your message has been sent successfully.");

    // Reset form
    form.reset();
  });

});

// ===============================
// Email Validation Function
// ===============================
function validateEmail(email) {
  const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return pattern.test(email);
}
