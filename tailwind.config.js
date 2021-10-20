module.exports = {
  purge: {
    enabled: false,
    content: [
      './customer/**/*.html',
      './pro/**/*.html',
      './website/**/*.html',
    ]
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      sm: "630px",
      md: "769px",
      lg: "1024px",
      xl: "1280px",
    },
    extend: {
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
      },
      fontSize: {
        '22': '22px',
        '32': '32px',
        '44': '44px',
        '60': '60px',
        '80': '80px',
      },
      borderRadius: {
        llg: "0.625rem",
        20: '20px',
      },
      colors: {
        ubuy: {
          black: "#25282B",
          dark: "#323C47",
          blue: "#119ae2",
          blue900: "#04202F",
          blue300: "#56CCF2",
          gray200: "#E5E5E5",
          gray400: "#F9F9FA",
          gray460: "#F7F7F7",
          gray450: "#CACCCF",
          gray500: "#707683",
          gray600: "#C2CFE0",
          secondary: "#52575C",
          green200: "#40DD7F",
          purple200: "#BB6BD9",
          yellow200: "#FFBC1F",
          yellow300: "#F4B844",
          inactive: "#A0A4A8",
          shade100: "#F1F9FD",
          shadee: "#F8FCFE",
          warningDefault: "#F6A609",
          negativeDefault: "#FB4E4E",
          positiveDefault: "#2AC769",
          positiveLight: "#40DD7F",
        },
      },
      zIndex: {
        1: '1'

      },
      boxShadow: {
        card: "0 2px 10px rgba(0, 0, 0, 0.1)",
        ncard: "0px 10px 40px rgba(0, 0, 0, 0.1)",
        nnncard: "50px 50px 100px rgba(0, 0, 0, 0.15)",
        newds: "0px 0px 100px rgba(0, 76, 116, 0.05)"
      },
      flex: {
        1: "1 1 0%",
        "1/4": "1 1 25%",
        "1/3": "1 1 33%",
        "1/2": "1 1 50%",
        "3/4": "1 1 75%",
        auto: "1 1 auto",
        initial: "0 1 auto",
        inherit: "inherit",
        none: "none",
        2: "2 2 0%",
      },
      minWidth: {
        'otpx': '102px',
        'xs': '320px',
        'tnf': '395px',
        'ttft': '1152px',
      },
      maxWidth: {
        'fttx': '433px',
        'tsh': '368px',
        'tnf': '395px'
      },
      minHeight: {
        xs: '20rem'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
