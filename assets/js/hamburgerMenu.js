const hamburger = document.getElementById("hamburger-menu");
const mobileMenu = document.getElementById("mobile-menu-modal");
const mainMenu = document.querySelector("nav.w-full.lg\\:w-auto");

function updateMenuVisibility() {
  if (window.innerWidth < 768) {
    // Мобильная версия — скрываем основное меню
    mainMenu.classList.add("hidden");
    // Если мобильное меню скрыто, оно остаётся скрытым
    // Если мобильное меню показано — оно видно
  } else {
    // Десктоп — показываем основное меню, скрываем мобильное
    mainMenu.classList.remove("hidden");
    mobileMenu.classList.add("hidden");
    hamburger.classList.remove("open");
  }
}

// Изначальная установка при загрузке страницы
updateMenuVisibility();

hamburger.addEventListener("click", () => {
  const isHidden = mobileMenu.classList.toggle("hidden");
  hamburger.classList.toggle("open");

  if (!isHidden) {
    // Мобильное меню показано — основное скрываем (для мобильных)
    if (window.innerWidth < 768) {
      mainMenu.classList.add("hidden");
    }
  } else {
    // Мобильное меню скрыто — показываем основное (если ширина >=768, иначе скрываем)
    if (window.innerWidth >= 768) {
      mainMenu.classList.remove("hidden");
    } else {
      mainMenu.classList.add("hidden");
    }
  }
});

window.addEventListener("resize", () => {
  updateMenuVisibility();
});
