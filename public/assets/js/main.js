const header = document.getElementById("site-header");

window.addEventListener("scroll", () => {
  header.classList.toggle("shadow-md", window.scrollY > 5);
});

const menuBtn = document.getElementById("menu-btn");
const menuClose = document.getElementById("menu-close");
const mobileMenu = document.getElementById("mobile-menu");

menuBtn.addEventListener("click", () => {
  mobileMenu.classList.remove("translate-x-full");
  document.body.classList.add("overflow-hidden");
});

menuClose.addEventListener("click", () => {
  mobileMenu.classList.add("translate-x-full");
  document.body.classList.remove("overflow-hidden");
});
