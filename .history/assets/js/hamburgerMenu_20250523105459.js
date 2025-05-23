<script>
  const hamburger = document.getElementById("hamburger-menu");
  const mobileMenu = document.getElementById("menu-items-mobile");

  hamburger.addEventListener("click", () => {
    if (mobileMenu.classList.contains("top-0")) {
      mobileMenu.classList.remove("top-0");
      mobileMenu.classList.add("-top-full");
    } else {
      mobileMenu.classList.remove("-top-full");
      mobileMenu.classList.add("top-0");
    }
  });

  // ✅ Скрываем мобильное меню при ресайзе на ширину >= 640px (sm breakpoint)
  window.addEventListener("resize", () => {
    if (window.innerWidth >= 640) {
      mobileMenu.classList.remove("top-0");
      mobileMenu.classList.add("-top-full");
    }
  });
</script>




