
  const hamburger = document.getElementById("hamburger-menu");
  const mobileMenu = document.getElementById("menu-items-mobile");

  function hideMobileMenu() {
    mobileMenu.classList.remove("top-0");
    mobileMenu.classList.add("-top-full");
  }

  function showMobileMenu() {
    mobileMenu.classList.remove("-top-full");
    mobileMenu.classList.add("top-0");
  }

  hamburger.addEventListener("click", () => {
    if (mobileMenu.classList.contains("top-0")) {
      hideMobileMenu();
    } else {
      showMobileMenu();
    }
  });

  // Принудительно скрыть мобильное меню при ресайзе
  window.addEventListener("resize", () => {
    if (window.innerWidth >= 640) {
      hideMobileMenu();
    }
  });

  // При загрузке тоже скрываем, если ширина >= 640
  document.addEventListener("DOMContentLoaded", () => {
    if (window.innerWidth >= 640) {
      hideMobileMenu();
    }
  });
const closeBtn = document.getElementById("close-mobile-menu");
if (closeBtn) {
  closeBtn.addEventListener("click", hideMobileMenu);
}
document.addEventListener("DOMContentLoaded", () => {
  if (window.innerWidth >= 640) {
    hideMobileMenu();
  } else {
    // Ensure it's still hidden if JS loads after flash
    mobileMenu.style.top = "-100vh";
  }
});




