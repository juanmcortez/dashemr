const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

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
            colors: {
                primary: '#202225',
                secondary: '#5865f2',
                gray: {
                    900: '#202225',
                    800: '#2f3136',
                    700: '#36393f',
                    600: '#4f545c',
                    400: '#d4d7dc',
                    300: '#e3e5e8',
                    200: '#ebedef',
                    100: '#f2f3f5',
                }
            },
            screens: {
                'sm': {
                    'max': '639px'
                },
                'md': {
                    'max': '767px'
                },
                'lg': {
                    'max': '1023px'
                },
                'xl': {
                    'max': '1279px'
                },
            },
            fontFamily: {
                sans: ['Amiko', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'xxs': '.6rem',
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms')
    ],
};
