const daisyui = require("daisyui");
console.log("✅ DaisyUI loaded");
module.exports = {
  content: [
    "./**/*.php",
    "./template-parts/**/*.php",
    "./assets/js/**/*.js",
    "./assets/css/**/*.css",
  ],
  safelist: [
    "btn",
    "btn-primary",
    "btn-secondary",
    "btn-accent",
    "collapse",
    "collapse-title",
    "collapse-content",
    "alert",
    "card",
    "modal", // add anything you plan to use from DaisyUI
  ],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
};
