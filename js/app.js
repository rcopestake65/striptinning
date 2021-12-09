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
  if (containerHeight === 0) {
    mobileMenuContainer.style.height = `${linksHeight + 20}px`;
  } else {
    mobileMenuContainer.style.height = 0;
  }
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

menuListItem.forEach(function (item) {
  const chevron = document.createElement("i");
  chevron.className = "fas fa-chevron-right";
  item.prepend(chevron);
  item.addEventListener("mouseenter", function () {
    chevron.style.color = "white";
  });
  item.addEventListener("mouseleave", function () {
    chevron.style.color = "black";
  });
});

//Date in footer
const date = document.getElementById("date");
date.innerHTML = new Date().getFullYear();

//add classes to multiple existing elements with the 'class'
function addClassAll(currentClass, newClass) {
  const item = document.querySelectorAll(currentClass);
  item.forEach(function (items) {
    items.classList.add(newClass);
  });
}
addClassAll(".read-more", "btn-link");
addClassAll(".wp-block-columns.blocks-row-1 a", "btn-link");
addClassAll(".wp-block-columns.blocks-row-2 a", "btn-link");
addClassAll(".wp-block-column h3", "block-header");

//Append element
function addElement(currentClass, newElement, newClass) {
  const item = document.querySelectorAll(currentClass);
  item.forEach(function (items) {
    const a = document.createElement(newElement);
    a.className = newClass;
    items.append(a);
  });
}
addElement(".btn-link", "i", "fas fa-arrow-right");

//Prepend element
function addElementBefore(currentClass, newElement, newClass) {
  const item = document.querySelectorAll(currentClass);
  item.forEach(function (items) {
    const a = document.createElement(newElement);
    a.className = newClass;
    items.prepend(a);
  });
}
addElementBefore(".go-back", "i", "fas fa-arrow-left");

//back to top button show on scroll offset
const topBtn = document.querySelector(".top-link");
window.addEventListener("scroll", () => {
  const scrollHeight = window.scrollY;
  if (scrollHeight > 500) {
    topBtn.classList.add("show-link");
  } else {
    topBtn.classList.remove("show-link");
  }
});

// finding height of homepage blocks to dynamically set all the same as the largest
// on screens less than 900px
if (document.querySelector(".home")) {
  const blocksRowOne = document.querySelectorAll(
    ".blocks-row-1 .wp-block-column"
  );
  const blocksRowTwo = document.querySelectorAll(
    ".blocks-row-2 .wp-block-column"
  );
  let heightArrOne = [];
  let heightArrTwo = [];
  //console.log("i am home");
  function findHeight(el1, el2) {
    el1.forEach((block) => {
      const blockHeight = block.getBoundingClientRect().height;
      heightArrOne.push(blockHeight);
    });
    console.log(heightArrOne);
    el2.forEach((block) => {
      const blockHeight = block.getBoundingClientRect().height;
      heightArrTwo.push(blockHeight);
    });
    console.log(heightArrTwo);
    const maxNum = Math.max(...heightArrOne, ...heightArrTwo);
    console.log(maxNum);
    if (window.screen.width < 900) {
      blocksRowOne.forEach((block) => {
        block.style.minHeight = `${maxNum}px`;
      });
      blocksRowTwo.forEach((block) => {
        block.style.minHeight = `${maxNum}px`;
      });
    }
  }
  findHeight(blocksRowOne, blocksRowTwo);
}

//Brighter IR
window.addEventListener("message", function (event) {
  var frames = document.getElementsByTagName("iframe");
  for (var i = 0; i < frames.length; i++) {
    if (frames[i].contentWindow === event.source) {
      jQuery(frames[i]).height(event.data);
      break;
    }
  }
});
