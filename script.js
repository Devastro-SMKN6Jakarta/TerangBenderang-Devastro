
const navbar = document.querySelector("nav");

window.addEventListener("scroll", function () {
  navbar.classList.toggle("nav-active", this.window.scrollY > 0);
});

const menuBtn = document.querySelector(".btn-menu");
const menu = document.querySelector(".menu");

menuBtn.addEventListener("click", function () {
  menu.classList.toggle("menu-active");
});
