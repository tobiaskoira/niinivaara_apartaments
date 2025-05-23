  // Get the hamburger icon and menu
  const hamburger = document.getElementById("hamburger-menu");
  const menuItems = document.getElementById("menu-items");
  const menuItemsMobile = document.getElementById("menu-items-mobile");

  // Add click event to toggle menu visibility
  hamburger.addEventListener("click", function() {
    // Toggle the 'hidden' class to show or hide the menu items
 
    menuItemsMobile.classList.toggle("hidden");


  });