/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/public/css/components/*.{ php, html }",
    "./public/**/*.php",
    "./public/**/*.js",
    "./public/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

