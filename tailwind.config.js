const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Amiko', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                twitter: '#00aaec',
                facebook: '#4267b2',
                linkedin: '#2977c9',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
