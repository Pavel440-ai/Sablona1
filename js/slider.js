function initSlider() {
  let idx = 0;
  const slides = document.getElementsByClassName("slide");
  const container = document.querySelector(".slides-container");
  const inner = document.createElement("div");

  inner.className = "slides-inner";
  Array.from(slides).forEach(slide => {
    inner.appendChild(slide.cloneNode(true));
    slide.remove();
  });
  container.prepend(inner);

  updateSlider();

  function updateSlider() {
    inner.style.transform = `translateX(-${idx * 100}%)`;
    Array.from(inner.children).forEach((slide, index) => {
      slide.classList.toggle("active", index === idx);
    });
  }

  document.getElementById("prev").addEventListener("click", () => {
    idx = (idx - 1 + slides.length) % slides.length;
    updateSlider();
  });

  document.getElementById("next").addEventListener("click", () => {
    if (idx === slides.length - 1) {
      idx = 0;
    } else {
      idx++;
    }
    updateSlider();
  });
}

document.addEventListener('DOMContentLoaded', initSlider);
