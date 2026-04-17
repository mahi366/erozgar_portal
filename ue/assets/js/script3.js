// ===== Explore Courses Slider =====
let courseIndex = 0;

function getCourseState() {
  const track = document.getElementById("courseSlider");
  const windowEl = document.querySelector(".slider-window");
  if (!track || !windowEl || track.children.length === 0) return null;

  const cards = track.children.length;
  const cardWidth = track.children[0].getBoundingClientRect().width;
  const windowWidth = windowEl.clientWidth;

  // visible cards depending on screen
  const visible = Math.max(1, Math.round(windowWidth / cardWidth));

  return { track, cards, cardWidth, visible };
}

function updateCourseSlider() {
  const state = getCourseState();
  if (!state) return;

  const { track, cards, cardWidth, visible } = state;
  const maxIndex = Math.max(0, cards - visible);

  if (courseIndex > maxIndex) courseIndex = maxIndex;
  if (courseIndex < 0) courseIndex = 0;

  const offset = courseIndex * cardWidth;
  track.style.transform = `translateX(-${offset}px)`;
}

function courseNext() {
  const state = getCourseState();
  if (!state) return;

  const { cards, visible } = state;
  const maxIndex = Math.max(0, cards - visible);

  if (courseIndex < maxIndex) {
    courseIndex++;
    updateCourseSlider();
  }
}

function coursePrev() {
  if (courseIndex > 0) {
    courseIndex--;
    updateCourseSlider();
  }
}

window.addEventListener("load", updateCourseSlider);
window.addEventListener("resize", updateCourseSlider);
