const hamburger = document.getElementById("hamburger-menu");
const mobileMenu = document.getElementById("menu-items-mobile");

hamburger.addEventListener("click", () => {
  if (mobileMenu.classList.contains("top-0")) {
    // Скрыть
    mobileMenu.classList.remove("top-0");
    mobileMenu.classList.add("-top-full");
  } else {
    // Показать
    mobileMenu.classList.remove("-top-full");
    mobileMenu.classList.add("top-0");
  }
});
