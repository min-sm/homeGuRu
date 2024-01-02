const defaultTheme = require("tailwindcss/defaultTheme");
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./View/**/*.{html,php,js}"],
  theme: {
    extend: {
      colors: {
        primary: "#F1F1F1",
        secondary: "#1F2937",
        tertiary: "#FFFFFF",
        alert: "#DD3C4A",
        darkGreen: "#00534F",
        goldYellow: "#FBAA45",
        paleGray: "#D9D9D9",
      },
      fontFamily: {
        roboto: ["Roboto"],
        playFair: ['"Playfair Display"'],
        sans: ["Roboto", ...defaultTheme.fontFamily.sans],
      },
      keyframes: {
<<<<<<< HEAD
        slider: {
=======
        slide: {
>>>>>>> cb21674bc937154fbe4f4f2cf5cfda26dcd4b64f
        '100%': { transform: 'translate(-100%)' },
        },
       
      },
      animation: {
<<<<<<< HEAD
        slide: 'slider 5s linear infinite',
=======
        slide: 'slide 5s linear infinite',
>>>>>>> cb21674bc937154fbe4f4f2cf5cfda26dcd4b64f
      }
    },
  },
  plugins: [],
};
