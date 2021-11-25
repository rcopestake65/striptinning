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
  //console.log(containerHeight);
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

//Date in footer
const date = document.getElementById("date");
date.innerHTML = new Date().getFullYear();

//const headerContainer = document.querySelectorAll('.wp-block-column');
const getHeaders = document.querySelectorAll(".wp-block-column h3");

getHeaders.forEach(function (item) {
  item.classList.add("block-header");
});
//console.log(getHeaders);

//add classes to <a>'s
const getBtns1 = document.querySelectorAll(".wp-block-columns.blocks-row-1 a");

getBtns1.forEach(function (item) {
  item.classList.add("btn-link");
});
const getBtns2 = document.querySelectorAll(".wp-block-columns.blocks-row-2 a");

getBtns2.forEach(function (item) {
  item.classList.add("btn-link");
});

const readMoreLink = document.querySelectorAll(".read-more");
readMoreLink.forEach(function (item) {
  item.classList.add("btn-link");
});
//insert font awesome icon into read-more btn for biogs
const readMore = document.querySelectorAll(".btn-link");

readMore.forEach(function (item) {
  const arrow = document.createElement("i");
  arrow.className = "fas fa-arrow-right";
  item.append(arrow);
});
