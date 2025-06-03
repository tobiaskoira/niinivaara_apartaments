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
    "modal",
    "text-sm",
    "text-xl",
    "sm:text-xl",
    "w-full",
    "rounded-md",
    "p-4",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Montserrat", "sans-serif"],
        montserrat: ["Montserrat", "sans-serif"],
      },
      maxWidth: {
        none: "none",
      },
      colors: {
        main: "var(--main-color)",
        mainLight: "var(--main-light)",
        mainLight: "var(--main-light)",
        mainBackground: "var(--main-backgound)",
        accent: "var(--accent-color)",
      },
    },
  },
  plugins: [],
};
