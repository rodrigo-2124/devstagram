/** @type {import('tailwindcss').Config} */


module.exports = {
  content: [
    "./resources/**/*.blade.php", //con ** se buscan todas las carpetas, con * todos los archivos con extension .blade.php
    "./resources/**/*.js",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php"
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
