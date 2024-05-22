/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{php,js}"],
  theme: {
    extend: {
      fontFamily: {
        'poppins': "Poppins",
        'great-vebes': "Great Vibes",
      },
      colors: {
        'primary': '#D6AB63',
        'secondary':'#7A8969',
        'teritary':'#565E4D',
        'paragraph':'#484141',
        'timeline':'#70965D',
        'golden':'#B0A465',
        'form':'#706767',
        'input':'#9FC39C',
      },
      backgroundImage: {
        'kotak-pesan':"url('public/img/pasir&batu.webp')"      
       }
    },
  },
  plugins: [],
}
