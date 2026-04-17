const menuToggle = document.getElementById("menuToggle");
const navMenu = document.getElementById("navMenu");
const mobileClose = document.getElementById("mobileClose");
const mobileOverlay = document.getElementById("mobileOverlay");

if (menuToggle && navMenu && mobileOverlay) {
  menuToggle.addEventListener("click", () => {
    navMenu.classList.add("show");
    mobileOverlay.classList.add("show");
    document.body.style.overflow = "hidden";
  });
}

if (mobileClose && navMenu && mobileOverlay) {
  mobileClose.addEventListener("click", () => {
    navMenu.classList.remove("show");
    mobileOverlay.classList.remove("show");
    document.body.style.overflow = "";
  });
}

if (mobileOverlay && navMenu) {
  mobileOverlay.addEventListener("click", () => {
    navMenu.classList.remove("show");
    mobileOverlay.classList.remove("show");
    document.body.style.overflow = "";
  });
}

/* current page active link */
const currentPage = window.location.pathname.split("/").pop() || "index.html";
const navLinks = document.querySelectorAll(".nav-menu .nav-link");

navLinks.forEach(link => {
  const href = link.getAttribute("href");
  link.classList.remove("active");
  if (href === currentPage) {
    link.classList.add("active");
  }
});