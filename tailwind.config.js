const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            green: {
                light: '#648C0D',
                dark: '#3B590E'
            } ,
            blue: {
                DEFAULT: '#6581A6'
            },
            yellow: {
                light: '#F2AA52',
                dark: '#BF7245'
            },
            white: {
                DEFAULT: '#FFFFFF'
            }
        }
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
