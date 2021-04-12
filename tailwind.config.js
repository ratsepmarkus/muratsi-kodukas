module.exports = {
  purge: [],
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage: theme => ({
        'background': "url('/img/poly-bg.png')",
      })
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
