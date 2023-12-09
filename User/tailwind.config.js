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
      },
    },
  },
  plugins: [],
};
