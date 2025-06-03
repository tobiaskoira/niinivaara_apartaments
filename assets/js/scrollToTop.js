// Get the button
var mybutton = document.getElementById("scrollToTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.opacity = "1"; // Show the button when scrolled down
  } else {
    mybutton.style.opacity = "0"; // Hide the button when at the top
  }
}

// When the user clicks on the button, scroll to the top of the document
mybutton.onclick = function () {
  window.scrollTo({ top: 0, behavior: "smooth" }); // Smooth scroll to top
};
