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

//Activating mobile submenus.
function mobileSubmenu() {
  const submenuContainers = document.querySelectorAll(
    ".header-services, .header-about, .header-projects",
  );
  const submenu = document.querySelectorAll(".submenu");
  submenuContainers.forEach((item, index) => {
    item.addEventListener("click", () => {
      submenu[index].classList.toggle("active");
    });
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

//Tooltip for additional information on hover.
function tooltip() {
  const element = document.querySelectorAll("[data-value]");

  element.forEach((item) => {
    item.addEventListener("mouseenter", handleEnter);
    item.addEventListener("mouseleave", handleLeave);
  });

  function handleEnter() {
    const windowSize = window.innerWidth * 0.5;
    const box = createTooltip(this);
    document.body.appendChild(box);
    this.addEventListener("mousemove", (event) => {
      if (window.matchMedia("(min-width:1040px)").matches) {
        box.style.top = event.pageY + 15 + "px";
        box.style.left = event.pageX + 15 + "px";
      } else if (event.clientX < windowSize) {
        box.style.top = event.pageY + 15 + "px";
        box.style.left = event.pageX + 15 + "px";
      } else {
        box.style.top = event.pageY + 18 + "px";
        box.style.left = event.pageX - 105 + "px";
      }
    });
  }

  function handleLeave() {
    document.body.removeChild(document.querySelector(".tooltip"));
    this.removeEventListener("mousemove", handleEnter);
  }

  function createTooltip(item) {
    const box = document.createElement("div");
    const text = document.createElement("p");
    text.innerHTML = item.dataset.value;
    if (item.dataset.color) {
      box.style.background = item.dataset.color;
    }
    box.classList.add("tooltip");
    box.appendChild(text);
    return box;
  }
}

//Activating frequently asked questions.
function faq() {
  const faqButtons = document.querySelectorAll(".faq-inner button");
  const faqContent = document.querySelectorAll(".faq-inner dd");
  faqButtons.forEach((item, index) => {
    item.addEventListener("click", () => {
      item.classList.toggle("active");
      faqContent[index].classList.toggle("active");
    });
  });
}

function anchor() {
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
      });
    });
  });
}

toggleMobileMenu();
mobileSubmenu();
alterFormCheckboxes();
animateElements();
tooltip();
faq();
anchor();
