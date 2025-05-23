  // Get the hamburger icon and menu
  const hamburger = document.getElementById("hamburger-menu");

  const menuItemsMobile = document.getElementById("menu-items-mobile");

  // Add click event to toggle menu visibility
  hamburger.addEventListener("click", function() {
    // Toggle the 'hidden' class to show or hide the menu items
 
    menuItemsMobile.classList.toggle("top-0");   // Slide down (optional if you want sliding)
    menuItemsMobile.classList.toggle("-top-full")


  });