  // Get the hamburger icon and menu
  const hamburger = document.getElementById("hamburger-menu");
  const menuItems = document.getElementById("menu-items");

  // Add click event to toggle menu visibility
  hamburger.addEventListener("click", function() {
    // Toggle the 'hidden' class to show or hide the menu items
    menuItems.classList.toggle("hidden");
  });