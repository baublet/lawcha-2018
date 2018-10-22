let colors = {
  transparent: "transparent",
  inherit: "inherit",

  foreground: "rgb(51,51,51)",
  foregroundLight: "rgba(51,51,51, 0.5)",
  foregroundSlight: "rgba(51,51,51, 0.05)",

  background: "rgb(254,254,254)",
  backgroundLight: "rgba(254,254,254, 0.5)",
  backgroundSlight: "rgba(254,254,254, 0.05)",

  primary: "rgb(130, 15, 30)",
  primaryDark: "rgb(90, 0, 0)",
  primaryLight: "rgb(200, 10, 30)",
  primarySlight: "rgba(130, 15, 30, .05)",

  primaryText: "rgb(51,51,51)",

  wcp: "#6200ea",
  wcpText: "#fcfcfc"
};

module.exports = {
  colors: colors,
  screens: {
    desktop: "768px"
  },
  fonts: {
    heading: ["bitter", "merriweather", "serif"],
    longForm: ["bitter", "merriweather", "serif"],
    normal: ["open sans", "trebuchet ms", "sans-serif"]
  },

  textSizes: {
    xs: ".75rem",
    sm: ".875rem",
    base: "1rem",
    lg: "1.125rem",
    xl: "1.25rem",
    "2xl": "1.5rem",
    "3xl": "1.875rem",
    "4xl": "2.25rem",
    "5xl": "3rem"
  },

  fontWeights: {
    thin: 200,
    regular: 400,
    bold: 700
  },

  leading: {
    none: 1,
    tight: 1.2,
    normal: 1.3,
    loose: 1.6
  },

  tracking: {
    tight: "-0.05em",
    normal: "0",
    wide: "0.05em"
  },

  textColors: colors,
  backgroundColors: colors,

  backgroundSize: {
    auto: "auto",
    cover: "cover",
    contain: "contain"
  },

  borderWidths: {
    default: "1px",
    "0": "0"
  },

  borderColors: colors,

  borderRadius: {
    none: "0",
    sm: ".125rem",
    default: ".25rem",
    lg: ".5rem",
    full: "9999px"
  },

  width: {
    auto: "auto",
    px: "1px",
    "1": "0.25rem",
    "2": "0.5rem",
    "3": "0.75rem",
    "4": "1rem",
    "5": "1.25rem",
    "6": "1.5rem",
    "8": "2rem",
    "10": "2.5rem",
    "12": "3rem",
    "16": "4rem",
    "24": "6rem",
    "32": "8rem",
    "48": "12rem",
    "64": "16rem",
    aside: "275px",
    "1/2": "50%",
    "1/3": "33.33333%",
    "2/3": "66.66667%",
    "1/4": "25%",
    "3/4": "75%",
    "1/5": "20%",
    "2/5": "40%",
    "3/5": "60%",
    "4/5": "80%",
    "1/6": "16.66667%",
    "5/6": "83.33333%",
    full: "100%",
    screen: "100vw"
  },

  height: {
    auto: "auto",
    px: "1px",
    "1": "0.25rem",
    "2": "0.5rem",
    "3": "0.75rem",
    "4": "1rem",
    "5": "1.25rem",
    "6": "1.5rem",
    "8": "2rem",
    "10": "2.5rem",
    "12": "3rem",
    "16": "4rem",
    "24": "6rem",
    "32": "8rem",
    "48": "12rem",
    "64": "16rem",
    full: "100%",
    screen: "100vh"
  },

  minWidth: {
    "0": "0",
    full: "100%"
  },

  minHeight: {
    "0": "0",
    full: "100%",
    screen: "100vh"
  },

  maxWidth: {
    xs: "20rem",
    sm: "30rem",
    md: "40rem",
    lg: "50rem",
    xl: "60rem",
    "2xl": "70rem",
    "3xl": "80rem",
    "4xl": "90rem",
    "5xl": "100rem",
    full: "100%"
  },

  maxHeight: {
    full: "100%",
    screen: "100vh"
  },

  padding: {
    px: "1px",
    "0": "0",
    "1": "0.25rem",
    normal: "1rem",
    large: "2rem",
    small: ".5rem",
    "x-small": ".25rem"
  },

  margin: {
    auto: "auto",
    px: "1px",
    "0": "0",
    normal: "1rem",
    large: "2rem",
    small: ".5rem",
    "x-small": ".25rem"
  },

  negativeMargin: {
    px: "1px",
    "0": "0",
    normal: "1rem",
    large: "2rem",
    small: ".5rem",
    "x-small": ".25rem"
  },

  shadows: {
    default: "0 2px 4px 0 rgba(0,0,0,0.10)",
    md: "0 4px 8px 0 rgba(0,0,0,0.12), 0 2px 4px 0 rgba(0,0,0,0.08)",
    lg: "0 15px 30px 0 rgba(0,0,0,0.11), 0 5px 15px 0 rgba(0,0,0,0.08)",
    inner: "inset 0 2px 4px 0 rgba(0,0,0,0.06)",
    outline: "0 0 0 3px rgba(52,144,220,0.5)",
    none: "none"
  },

  zIndex: {
    auto: "auto",
    "0": 0,
    "10": 10,
    "20": 20,
    "30": 30,
    "40": 40,
    "50": 50
  },

  opacity: {
    "0": "0",
    "25": ".25",
    "50": ".5",
    "75": ".75",
    "100": "1"
  },

  svgFill: {
    current: "currentColor"
  },

  svgStroke: {
    current: "currentColor"
  },

  modules: {
    appearance: ["responsive"],
    backgroundAttachment: ["responsive"],
    backgroundColors: ["responsive", "hover", "focus"],
    backgroundPosition: ["responsive"],
    backgroundRepeat: ["responsive"],
    backgroundSize: ["responsive"],
    borderCollapse: [],
    borderColors: ["responsive", "hover", "focus"],
    borderRadius: ["responsive"],
    borderStyle: ["responsive"],
    borderWidths: ["responsive"],
    cursor: ["responsive"],
    display: ["responsive"],
    flexbox: ["responsive"],
    float: ["responsive"],
    fonts: ["responsive"],
    fontWeights: ["responsive", "hover", "focus"],
    height: ["responsive"],
    leading: ["responsive"],
    lists: ["responsive"],
    margin: ["responsive"],
    maxHeight: ["responsive"],
    maxWidth: ["responsive"],
    minHeight: ["responsive"],
    minWidth: ["responsive"],
    negativeMargin: ["responsive"],
    opacity: ["responsive", "hover", "focus"],
    outline: ["focus"],
    overflow: ["responsive"],
    padding: ["responsive"],
    pointerEvents: ["responsive"],
    position: ["responsive"],
    resize: ["responsive"],
    shadows: ["responsive", "hover", "focus"],
    svgFill: [],
    svgStroke: [],
    tableLayout: ["responsive"],
    textAlign: ["responsive"],
    textColors: ["responsive", "hover", "focus"],
    textSizes: ["responsive"],
    textStyle: ["responsive", "hover", "focus"],
    tracking: ["responsive"],
    userSelect: ["responsive"],
    verticalAlign: ["responsive"],
    visibility: ["responsive"],
    whitespace: ["responsive"],
    width: ["responsive"],
    zIndex: ["responsive"]
  },

  plugins: [
    require("tailwindcss/plugins/container")({
      // center: true,
      // padding: '1rem',
    })
  ],

  options: {
    prefix: "",
    important: false,
    separator: ":"
  }
};
