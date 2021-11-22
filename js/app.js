const toggleBtn = document.querySelector(".nav-toggle");
const mobileMenuContainer = document.querySelector(".mobile-menu-container");
const mobileMenu = document.querySelector(".mobile-menu");
const openBtnIcon = document.querySelector(".fa-bars");
const closeBtnIcon = document.querySelector(".fa-times");

toggleBtn.addEventListener("click", function () {
  const containerHeight = mobileMenuContainer.getBoundingClientRect().height;
  const linksHeight = mobileMenu.getBoundingClientRect().height;
  closeBtnIcon.classList.toggle("hide");
  openBtnIcon.classList.toggle("hide");
  //console.log(linksHeight);
  //console.log(containerHeight);
  if (containerHeight === 0) {
    mobileMenuContainer.style.height = `${linksHeight + 20}px`;
  } else {
    mobileMenuContainer.style.height = 0;
  }
  //mobileMenuContainer.classList.toggle("show-mobile-menu");
  console.log(containerHeight);
});

//logo hover effect
const frontPage = document.querySelector(".home");
const logo = document.querySelector(".logo");
if (!frontPage) {
  const gohome = document.querySelector(".go-home");
  logo.addEventListener("mouseenter", function () {
    gohome.classList.add("go-home-hover");
  });
  logo.addEventListener("mouseleave", function () {
    gohome.classList.remove("go-home-hover");
  });
}
//insert font awesome icon into menu
const menuListItem = document.querySelectorAll(".menu-item");
//console.log(menuListItem);
menuListItem.forEach(function (item) {
  const chevron = document.createElement("i");
  chevron.className = "fas fa-chevron-right";
  item.prepend(chevron);
  item.addEventListener("mouseenter", function () {
    chevron.style.color = "white";
  });
  item.addEventListener("mouseleave", function () {
    chevron.style.color = "black";
    //console.log(item);
  });
});

//insert font awesome icon into read-more btn for biogs
const readMore = document.querySelectorAll(".read-more");
//console.log(menuListItem);
readMore.forEach(function (item) {
  const arrow = document.createElement("i");
  arrow.className = "fas fa-arrow-right";
  item.append(arrow);
});
//GSAP
//home page stuff as test

const home = document.querySelector(".home");

if (home) {
  gsap.set([".hero-btn", ".logo"], { opacity: 0, y: -50 });
  gsap.to([".hero-btn", ".logo"], {
    opacity: 1,
    y: 0,
    duration: 0.75,
  });
  gsap.set(".hero h2", { opacity: 0, x: -50 });
  gsap.to(".hero h2", { opacity: 1, x: 0, duration: 0.75 });

  gsap.set(".sidebar", { opacity: 0, x: -30 });
  gsap.to(".sidebar", { opacity: 1, x: 0, duration: 0.75 });

  gsap.registerPlugin(ScrollTrigger);

  gsap.set(".highlights p:first-of-type", { opacity: 0 });
  gsap.to(".highlights p:first-of-type", {
    scrollTrigger: {
      trigger: ".highlights",
      start: "top bottom",
    },
    opacity: 1,
    duration: 1,
    stagger: 0.5,
  });

  gsap.set([".wp-block-column h2", ".wp-block-column h3"], {
    opacity: 0,
    y: +10,
  });
  gsap.to([".wp-block-column h2", ".wp-block-column h3"], {
    scrollTrigger: {
      trigger: ".highlights",
      start: "top bottom",
    },
    opacity: 1,
    y: 0,
  });

  gsap.set(
    [
      ".wp-block-columns.blocks-row-1 h3",
      ".wp-block-columns.blocks-row-1 h4",
      ".wp-block-columns.blocks-row-1 p",
      ".wp-block-columns.blocks-row-2 h3",
      ".wp-block-columns.blocks-row-2 h4",
      ".wp-block-columns.blocks-row-2 p",
    ],
    {
      opacity: 0,
      y: +10,
    }
  );
  gsap.to(
    [
      ".wp-block-columns.blocks-row-1 h3",
      ".wp-block-columns.blocks-row-1 h4",
      ".wp-block-columns.blocks-row-1 p",
    ],
    {
      scrollTrigger: {
        trigger: ".blocks-row-1",
        start: "top center",
      },
      opacity: 1,
      y: 0,
      ease: "back",
      duration: 0.5,
      stagger: 0.05,
    }
  );
  gsap.to(
    [
      ".wp-block-columns.blocks-row-2 h3",
      ".wp-block-columns.blocks-row-2 h4",
      ".wp-block-columns.blocks-row-2 p",
    ],
    {
      scrollTrigger: {
        trigger: ".blocks-row-2",
        start: "top bottom",
      },
      opacity: 1,
      y: 0,
      ease: "back",
      duration: 0.5,
      stagger: 0.05,
    }
  );
}
//gsap.to(".test", { scrollTrigger: ".test", x: 200, duration: 12 });
//gsap.to(".wp-block-column", { opacity: 1, duration: 0.5, stagger: 0.2 });
