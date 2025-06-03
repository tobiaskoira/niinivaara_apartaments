// Get the hamburger icon and menu
const hamburger = document.getElementById("hamburger-menu");
const menuItems = document.getElementById("menu-items");
const menuItemsMobile = document.getElementById("menu-items-mobile");

// Add click event to toggle menu visibility
hamburger.addEventListener("click", function () {
  // Toggle the 'hidden' class to show or hide the menu items
  menuItems.classList.toggle("hidden");
  menuItemsMobile.classList.toggle("hidden");

  // Apply sliding effect from the top
  menuItems.classList.toggle("top-0"); // Slide down
  menuItems.classList.toggle("-top-full"); // Slide up (offscreen)
});
