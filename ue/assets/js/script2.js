// Header shadow on scroll (optional small effect)
const header = document.querySelector(".main-header");

window.addEventListener("scroll", () => {
  if (!header) return;

  if (window.scrollY > 10) {
    header.style.boxShadow = "0 4px 12px rgba(15, 23, 42, 0.12)";
  } else {
    header.style.boxShadow = "none";
  }
});
