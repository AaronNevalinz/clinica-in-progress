/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.jsx",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      padding: {
        DEFAULT: '15px'
      }
    },
    screens: {
      sm: '640px',
      md: '768px',
      lg: '960px',
      xl: '1330px'
    },
    extend: { 
      colors: {
        primary: '#BF1541',
        secondary: '#ECBBC8',
        transParent: "rgba(0,0,0,0.5)",
        bgAdmin: "#E7E7E7",
        lightPrimary: 'rgba(91, 82,82,0.44)',
        accent: {
          DEFAULT: '#F5DDE3',
          secondary: '#18abbc',
          tertiary: '#90c6cd',
          quaternary: '#E7E7E7'
        },
        grey: '#767676'
      },
      fontFamily: {
        primary: 'Josefin Sans'
      },
      boxShadow: {
        custom1: '0px 2px 4px 0px rgba(8, 70, 78, 0.08)',
        custom2: '0px 0px 30px 0px rgba(8, 73, 81, 0.06)'
      },
      backgroundImage: {
        services: 'url(../assets/img/services.jpg)',
        testimonials: 'url(../assets/images/testimonials-bg.png)',
        departments: 'url(../assets/images/departments-bg.png)',
        quoteLeft: 'url(../assets/img/double-quotes-l.png)',
        quoteRight: 'url(../assets/img/double-quotes-r.png)'
      },
    },
  },
  plugins: [],
}