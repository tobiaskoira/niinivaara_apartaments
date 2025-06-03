const hamburger = document.getElementById("hamburger-menu");
const mobileMenu = document.getElementById("menu-items-mobile");

const hideMobileMenu = () => {
  mobileMenu.classList.remove("top-0");
  mobileMenu.classList.add("-top-full");
};

hamburger.addEventListener("click", () => {
  const isOpen = mobileMenu.classList.contains("top-0");
  if (isOpen) {
    hideMobileMenu();
  } else {
    mobileMenu.classList.remove("-top-full");
    mobileMenu.classList.add("top-0");
  }
});

// ❗ Автоматическое скрытие при переходе на десктоп
window.addEventListener("resize", () => {
  if (window.innerWidth >= 640) {
    hideMobileMenu();
  }
});

// Инициализация при загрузке
if (window.innerWidth >= 640) {
  hideMobileMenu();
}
