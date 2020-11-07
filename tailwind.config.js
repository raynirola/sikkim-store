const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: ['./storage/framework/views/*.php'],

    theme: {
        extend: {
            fontFamily: {
                titleFont: ['Oswald', ...defaultTheme.fontFamily.sans],
                bodyFont: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brand: {
                    '50': '#f5f7f7',
                    '100': '#eff5ee',
                    '200': '#ddedcc',
                    '300': '#bce586',
                    '400': '#77d44d',
                    '500': '#4eb82e',
                    '600': '#379d1b',
                    '700': '#2c8118',
                    '800': '#225e18',
                    '900': '#224719',
                },
                secondary: {
                    '50':  '#f7f8f8',
                    '100': '#f2f6f4',
                    '200': '#e1e7e6',
                    '300': '#ccd6d1',
                    '400': '#9fb6b1',
                    '500': '#798f91',
                    '600': '#5a6b6f',
                    '700': '#48555c',
                    '800': '#394147',
                    '900': '#2f3339',
                },
            },
            opacity: {
                '10': '0.1',
                '20': '0.2',
                '30': '0.3',
                '40': '0.4',
                '60': '0.6',
                '70': '0.7',
                '80': '0.8',
                '85': '0.85',
                '90': '0.9',
                '95': '0.95',
                '98': '0.98',
                '99': '0.99',
            },
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [require('@tailwindcss/ui')],
};
