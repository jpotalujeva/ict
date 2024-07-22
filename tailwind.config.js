@import "tailwindcss/base"; 
@import "tailwindcss/components";
@import "tailwindcss/utilities";

@import defaultTheme from 'tailwindcss/defaultTheme';
@import forms from '@tailwindcss/forms';

// export default {
//    content: [
//     "./resources/**/*.blade.php",
//     "./resources/**/*.js",
//     "./resources/**/*.vue",
//   ],
//   theme: {
//     extend: {},
//   },
//   plugins: [
//      forms,
//   ],
// }

module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {},
    },
    plugins: [
        require('flowbite/plugin')
    ],
  }