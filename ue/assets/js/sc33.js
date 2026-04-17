// File: js/course-detail.js

document.addEventListener("DOMContentLoaded", function () {
  // ===== Scroll to "What You Will Learn" section =====
  const learnBtn = document.querySelector(".btn-learn-more");
  const learnSection = document.querySelector("#what-you-will-learn");

  if (learnBtn && learnSection) {
    learnBtn.addEventListener("click", () => {
      learnSection.scrollIntoView({ behavior: "smooth" });
    });
  }

  // ===== "Who should enroll?" accordion cards =====
  const enrollItems = document.querySelectorAll(".enroll-item");

  enrollItems.forEach((item) => {
    const header = item.querySelector(".enroll-header");
    if (!header) return;

    header.addEventListener("click", () => {
      item.classList.toggle("open");
    });
  });

  // ===== Apply Now button on the course detail page =====
  const applyBtn = document.querySelector(".course-hero-apply, .course-detail-apply");
  if (applyBtn) {
    const courseTitleEl = document.querySelector(".course-title");
    const courseName = courseTitleEl ? courseTitleEl.textContent.trim() : "";

    applyBtn.addEventListener("click", () => {
      if (courseName) {
        window.location.href = `register.html?course=${encodeURIComponent(courseName)}`;
      } else {
        window.location.href = "register.html";
      }
    });
  }
});
