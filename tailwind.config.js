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
        primary: '#00BED1',
        secondary: '#F9F9FB'
      }
    },
  },
  plugins: [],
}