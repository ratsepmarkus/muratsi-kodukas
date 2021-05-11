const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            spacing: {
                '100': '32rem',
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: theme => ({
                'background': "url('/img/poly-bg.png')",
                'nav-bg': "url('/img/nav-bg.png')",
            }),
            backgroundColor: theme => ({
                'primary': '#022A52',
                'secondary': '#ffed4a',
                'danger': '#e3342f',
            })
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            backgroundColor: ['active'],
            borderOpacity: ['hover'],
            borderColor: ['hover'],
            borderStyle: ['hover'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
