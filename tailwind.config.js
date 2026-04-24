module.exports = {
  content: [
    "./*.html",          // ✅ add this
    "./*.php",
    "./**/*.php",
    "./template-parts/**/*.php",
    "./inc/**/*.php",
    "./assets/js/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}