import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        screens: {
            'xs': '385px',
            // => @media (min-width: 240px) { ... }

            'sm': '640px',
            // => @media (min-width: 640px) { ... }

            'md': '768px',
            // => @media (min-width: 768px) { ... }

            'lg': '1024px',
            // => @media (min-width: 1024px) { ... }

            'xl': '1280px',
            // => @media (min-width: 1280px) { ... }

            '2xl': '1536px',
            // => @media (min-width: 1536px) { ... }

            '2xl-m': { 'max': '1535px' },
            // => @media (max-width: 1535px) { ... }

            'xl-m': { 'max': '1280px' },
            // => @media (max-width: 1279px) { ... }

            'lg-m': { 'max': '1024px' },
            // => @media (max-width: 1023px) { ... }

            'md-m': { 'max': '767px' },
            // => @media (max-width: 767px) { ... }

            'sm-m': { 'max': '639px' },
            // => @media (max-width: 639px) { ... }

            'xs-m': { 'max': '380px' },
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, typography],
};
