/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.php", "./widgets/**/*.php", "./components/**/*.php", "./layouts/**/*.php", "./web/js/**/*.js"],
  theme: {
    extend: {
      fontFamily: {
        pop: ["Poppins", "sans-serif"],
      },
      colors: {
        yellowpad: "#F3F0E9",
      },
    },
  },
  plugins: [],
};
