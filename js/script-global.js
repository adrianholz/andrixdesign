//Global header mobile menu toggle.
function toggleMobileMenu() {
  const menuToggle = document.querySelector(".menu-toggle");
  const nav = document.querySelector("nav");
  const overlay = document.querySelector(".overlay");

  menuToggle.addEventListener("click", () => {
    nav.classList.toggle("show");
    overlay.classList.toggle("show");
  });

  overlay.addEventListener("click", () => {
    nav.classList.toggle("show");
    overlay.classList.toggle("show");
  });
}

//Background and color alteration for labels as inputs are checked.
function alterFormCheckboxes() {
  const contactLabels = document.querySelectorAll(".checkbox-group label");
  const contactCheckboxes = document.querySelectorAll(
    ".checkbox-group label input",
  );

  contactLabels.forEach((item, index) => {
    item.addEventListener("click", () => {
      if (contactCheckboxes[index].checked) {
        item.classList.add("active");
      } else {
        item.classList.remove("active");
      }
    });
  });
}

//Observing elements as they appear, as to show them through CSS scroll transitions.
function animateElements() {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show-element");
      } else {
        entry.target.classList.remove("show-element");
      }
    });
  });

  const observeOnce = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show-element");
      }
    });
  });

  const showElements = document.querySelectorAll(".scroll-animation");
  const showElementsOnce = document.querySelectorAll(".scroll-animation-once");
  showElements.forEach((item) => observer.observe(item));
  showElementsOnce.forEach((item) => observeOnce.observe(item));
}

toggleMobileMenu();
alterFormCheckboxes();
animateElements();
