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
    keyframes: {
        moveToRight: {
          '0%': { opacity: '1' },
          '100%': {opacity: '0'}
        },
        typing: {
            "0%": {
              width: "0%",
              visibility: "hidden"
            },
            "100%": {
              width: "100%"
            }
          },
          blink: {
            "50%": {
              borderColor: "transparent"
            },
            "100%": {
              borderColor: "white"
            }
          }
      },
      animation: {
        moveToRight: 'moveToRight 5s ',
        typing: "typing 2s steps(20) alternate, blink .7s infinite"
      },
    },
    plugins: [],
  }
