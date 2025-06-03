/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{css,js,php}", "./src/**/*.{js,css,php}", "./components/**/*.{php,css,js}"],
  theme: {
    container: {
      center: true,
      padding: '15px',
    },
    extend: {
      colors: {
        primary: '#26BECD',
        secondary: '#F9F9FB'
      }
    },
  },
  plugins: [],
}