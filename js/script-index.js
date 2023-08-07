//This is script is only index-related code, as to not interfere with other pages.

//Taking the text present in H1 element and separating it as to animate on icon hover/touch as well as preserving SEO.
const mainTitle = document.querySelectorAll(
  ".first-word i, .second-word, .main-inner p span",
);
const mainHeadingText = document.querySelector("main h1 span:nth-child(1)");
const alteredHeading = document.querySelector("main h1").innerText.split(" ");

for (let x = 0; x <= alteredHeading.length - 1; x++) {
  alteredHeading[x] = alteredHeading[x].replace(",", "");
}

mainHeadingText.innerText = "";
mainTitle[1].innerHTML = alteredHeading[4];
mainTitle[2].innerHTML = alteredHeading[5];

const serviceIcons = Array.from(
  document.querySelectorAll(".icons-above a, .icons-below a"),
);
const headingSeparator = document.querySelector(".heading-separator");
const blur = document.querySelectorAll(".blur");
const serviceClasses = [
  "marketing",
  "design",
  "website",
  "video",
  "ecommerce",
  "identity",
];

const eventsMain = ["mouseenter", "click", "touch"];

eventsMain.forEach((eventType) => {
  serviceIcons.forEach((item, index) => {
    item.addEventListener(eventType, () => {
      alternateMain(index);
    });
  });
});

function alternateMain(index) {
  blur.forEach((item) => {
    item.classList.remove("active");
  });
  serviceIcons.forEach((item) => {
    item.classList.remove("active");
    item.classList.add("small");
    item.style.pointerEvents = "none";
    setTimeout(() => {
      if (!item.classList.contains("active")) {
        item.style.pointerEvents = "unset";
      }
    }, 2000);
  });
  setTimeout(() => {
    blur.forEach((item) => {
      item.classList.add("active");
      serviceClasses.forEach((service) => {
        item.classList.remove(service);
      });
    });
  }, 1000);
  alternateService(index);
  if (index == 0) {
    mainTitle[0].innerHTML = "Aqui começa o seu";
    mainTitle[1].innerHTML = alteredHeading[0];
    mainTitle[2].innerHTML = alteredHeading[1];
    setTimeout(() => {
      blur.forEach((item) => {
        item.classList.add("website");
      });
    }, 1000);
  } else if (index == 1) {
    mainTitle[0].innerHTML = "Aqui começa a sua";
    mainTitle[1].innerHTML = alteredHeading[2];
    mainTitle[2].innerHTML = alteredHeading[3];
    setTimeout(() => {
      blur.forEach((item) => {
        item.classList.add("ecommerce");
      });
    }, 1000);
  } else if (index == 2) {
    mainTitle[0].innerHTML = "Aqui começa o seu";
    mainTitle[1].innerHTML = alteredHeading[4];
    mainTitle[2].innerHTML = alteredHeading[5];
    setTimeout(() => {
      blur.forEach((item) => {
        item.classList.add("marketing");
      });
    }, 1000);
  } else if (index == 3) {
    mainTitle[0].innerHTML = "Aqui começa o seu";
    mainTitle[1].innerHTML = alteredHeading[6];
    mainTitle[2].innerHTML = alteredHeading[7];
    setTimeout(() => {
      blur.forEach((item) => {
        item.classList.add("design");
      });
    }, 1000);
  } else if (index == 4) {
    mainTitle[0].innerHTML = "Aqui começa a sua";
    mainTitle[1].innerHTML = alteredHeading[8];
    mainTitle[2].innerHTML = alteredHeading[9];
    setTimeout(() => {
      blur.forEach((item) => {
        item.classList.add("identity");
      });
    }, 1000);
  } else if (index == 5) {
    mainTitle[0].innerHTML = "Aqui começa o seu";
    mainTitle[1].innerHTML = alteredHeading[10];
    mainTitle[2].innerHTML = alteredHeading[11];
    setTimeout(() => {
      blur.forEach((item) => {
        item.classList.add("video");
      });
    }, 1000);
  }
  serviceIcons[index].classList.add("active");
  serviceIcons[index].classList.remove("small");
  mainTitle.forEach((item) => {
    item.classList.remove("active");
    void item.offsetWidth;
    item.classList.add("active");
  });
  headingSeparator.classList.remove("active");
  void headingSeparator.offsetWidth;
  headingSeparator.classList.add("active");
}

//Taking post paragraph content to reduce it and add to website responsiveness.

const postCall = document.querySelectorAll(".post-call");
const postContent = document.querySelectorAll(".post-content");
const postContentInner = document.querySelectorAll(".post-content-inner");
const postText = document.querySelectorAll(".post-preview p");
const postMore = document.querySelectorAll(".post-content-inner p .more-link");

let originalPostText = [];
let newResponsiveText = [];
let postTextResponsive = [];

for (let x = 0; x <= postText.length - 1; x++) {
  postTextResponsive[x] = postText[x].innerHTML.split(" ").slice(0, 18);
  postTextResponsive[x][17] = postTextResponsive[x][17] + "...";
  newResponsiveText[x] = postTextResponsive[x]
    .toString()
    .replaceAll(",", " ")
    .replaceAll("  ", ", ");
  originalPostText[x] = postText[x].innerHTML;
}

window.addEventListener("resize", () => {
  activatePostResponsive();
});

function activatePostResponsive() {
  if (window.matchMedia("(max-width: 1040px)").matches) {
    postContentInner.forEach((item, index) => {
      if (!item.contains(postCall[index])) {
        item.appendChild(postCall[index]);
        postText[index].innerHTML = newResponsiveText[index];
      }
    });
  } else {
    postContentInner.forEach((item, index) => {
      if (item.contains(postCall[index])) {
        item.removeChild(postCall[index]);
        postContent[index].appendChild(postCall[index]);
        postText[index].innerHTML = originalPostText[index];
        postText.forEach((item) => {
          item.innerText = item.innerText.slice(0, -8) + "...";
        });
      }
    });
  }
}

function postReadMore() {
  postMore.forEach((item) => {
    item.innerHTML = "...";
  });
  postText.forEach((item) => {
    item.innerText = item.innerText.slice(0, -4) + item.innerText.slice(-3);
  });
}

postReadMore();
activatePostResponsive();

//Altering service presented at service section, and playing transition video in between.

const serviceWindowInner = document.querySelectorAll(".service-window-inner");
const serviceWindowInnerBackground = document.querySelector(
  ".service-window-inner-background",
);
const serviceWindowVideo = document.querySelector(
  ".service-window-inner-background video",
);
const serviceWindowNav = document.querySelectorAll(".services-nav div");

serviceWindowNav.forEach((item, index) => {
  item.addEventListener("click", () => {
    alternateService(index);
    alternateMain(index);
    if (window.matchMedia("(max-width: 740px)").matches) {
      document.getElementById("services-window").scrollIntoView({
        behavior: "smooth",
      });
    }
  });
});

function alternateService(index) {
  serviceWindowVideo.play();
  serviceWindowInnerBackground.classList.add("active");
  setTimeout(() => {
    serviceWindowInnerBackground.classList.remove("active");
  }, 1400);
  setTimeout(() => {
    serviceWindowInner.forEach((window) => {
      window.classList.remove("active");
    });
    serviceWindowInner[index].classList.add("active");
  }, 300);
  serviceWindowNav.forEach((item) => {
    item.classList.remove("active");
  });
  serviceWindowNav[index].classList.add("active");
}

//Changing interface presentation at service section.

const interfaceTypes = document.querySelectorAll(".interface-boxes div");
const interfacePreview = document.querySelector(".interface-preview");
const interfacePreviewClasses = ["simple", "elegant", "fun", "modern"];

interfaceTypes.forEach((item, index) => {
  item.addEventListener("click", () => {
    interfaceTypes.forEach((item) => {
      item.classList.remove("active");
    });
    item.classList.add("active");
    interfacePreviewClasses.forEach((classItem) => {
      interfacePreview.classList.remove(classItem);
    });
    if (index == 0) {
      interfacePreview.classList.add("simple");
    } else if (index == 1) {
      interfacePreview.classList.add("elegant");
    } else if (index == 2) {
      interfacePreview.classList.add("fun");
    } else if (index == 3) {
      interfacePreview.classList.add("modern");
    }
  });
});

//Start/pause project animation on click.

const projects = document.querySelectorAll(".project");
const projectStart = document.querySelectorAll(".project-start");

projectStart.forEach((item, index) => {
  item.addEventListener("click", () => {
    projects[index].classList.toggle("active");
  });
});

//Website introduction related code.

const intro = document.querySelector(".intro");
const logoImage = document.querySelector(".intro img");
const logoSpan = document.querySelectorAll(".intro-heading span");

window.addEventListener("DOMContentLoaded", () => {
  logoImage.classList.add("active");
  setTimeout(() => {
    logoSpan.forEach((span, index) => {
      setTimeout(() => {
        span.classList.add("active");
      }, (index + 1) * 100);
    });

    setTimeout(() => {
      intro.style.top = "-100vh";
    }, 2300);
  });
});
