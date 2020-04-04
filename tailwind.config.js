module.exports = {
  theme: {
    borderColor: theme => ({
      default: theme('colors.brown.300', 'currentColor'),
    }),
    extend: {
      colors: {
        brown: {
          '100': '#FAF6F1',
          '200': '#F2EBE4',
          '300': '#ECE3DA',
          '400': '#D9CEC3',
          '500': '#B6A594',
          '600': '#817260',
          '700': '#594A3C',
          '800': '#47392C',
          '900': '#2B221A',
        }
      }
    }
  }
}
