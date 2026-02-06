/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.php", "./app/**/*.php"],
  theme: {
    extend: {
      colors: {
        primary: {
          50: "#f2f6fa",
          100: "#e6edf5",
          200: "#c0d3e6",
          300: "#99b9d6",
          400: "#4d86b8",
          500: "#012E55", // MAIN BRAND (was maroon)
          600: "#01294c",
          700: "#012341",
          800: "#011d36",
          900: "#01172b",
          950: "#000f1d",
        },

        secondary: {
          50: "#fff2ec",
          100: "#ffe0d3",
          200: "#ffc0a6",
          300: "#ff9a70",
          400: "#ff7a45",
          500: "#FF5F19", // BRAND ORANGE (was blue)
          600: "#e65517",
          700: "#cc4b14",
          800: "#a63e11",
          900: "#7a2e0c",
        },

        accent: {
          400: "#ffd27a",
          500: "#FF5F19", // reuse orange as accent
          600: "#e65517",
        },
      },

      fontFamily: {
        sans: ["Inter", "system-ui", "-apple-system", "sans-serif"],
        display: ["Inter", "system-ui", "-apple-system", "sans-serif"],
      },
      animation: {
        "fade-in": "fadeIn 0.5s ease-out forwards",
        "slide-up": "slideUp 0.5s ease-out forwards",
        fade: "fade 0.8s ease-out forwards",
        float: "float 3s ease-in-out infinite",
      },
      keyframes: {
        fadeIn: {
          "0%": { opacity: "0" },
          "100%": { opacity: "1" },
        },
        slideUp: {
          "0%": { opacity: "0", transform: "translateY(20px)" },
          "100%": { opacity: "1", transform: "translateY(0)" },
        },
        fade: {
          "0%": { opacity: "0", transform: "translateY(12px)" },
          "100%": { opacity: "1", transform: "translateY(0)" },
        },
        float: {
          "0%, 100%": { transform: "translateY(0)" },
          "50%": { transform: "translateY(-10px)" },
        },
      },
    },
  },
  plugins: [],
};
