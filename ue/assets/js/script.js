const header = document.querySelector(".site-header");

if (header) {
  window.addEventListener("scroll", () => {
    if (window.scrollY > 10) {
      header.classList.add("header-shadow");
    } else {
      header.classList.remove("header-shadow");
    }
  });
}