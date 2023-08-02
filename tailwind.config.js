/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {

      extend: {
        fontFamily: {
            'IRANSansWeb': ["IRANSansWeb","IRANSansWeb"] // Ensure fonts with spaces have " " surrounding it.
          },
      },

      fontFamily: {
        'IRANSansWeb': ['IRANSansWeb IRANSansWeb'],
    },
    direction:{
        'rtl' : 'rtl',
    },
    },
    plugins: [],
  }
