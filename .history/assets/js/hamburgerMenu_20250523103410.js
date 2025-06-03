const hamburger = document.getElementById("hamburger-menu");
const mobileMenu = document.getElementById("menu-items-mobile");

hamburger.addEventListener("click", () => {
  mobileMenu.classList.toggle("top-0");
  mobileMenu.classList.toggle("-top-full");
});
