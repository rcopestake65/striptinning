const toggleBtn = document.querySelector(".nav-toggle");
const mobileMenuContainer = document.querySelector(".mobile-menu-container");
const mobileMenu = document.querySelector(".mobile-menu");

toggleBtn.addEventListener("click", function () {
  const containerHeight = mobileMenuContainer.getBoundingClientRect().height;
  const linksHeight = mobileMenu.getBoundingClientRect().height;
  console.log(linksHeight);
  console.log(containerHeight);
  if (containerHeight === 0) {
    mobileMenuContainer.style.height = `${linksHeight + 20}px`;
  } else {
    mobileMenuContainer.style.height = 0;
  }
  //mobileMenuContainer.classList.toggle("show-mobile-menu");
  console.log(containerHeight);
});

//logo hover effect
const logo = document.querySelector(".logo");
const gohome = document.querySelector(".go-home");

logo.addEventListener("mouseenter", function () {
  //console.log("hovered");
  gohome.classList.add("go-home-hover");
});
logo.addEventListener("mouseleave", function () {
  gohome.classList.remove("go-home-hover");
});

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
