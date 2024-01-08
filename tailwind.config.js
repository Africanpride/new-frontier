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
        'node_modules/preline/dist/*.js',
    ],
    darkMode: 'class',

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {

                firefly: {
                    50: '#f2f9fd',
                    100: '#e4f1fa',
                    200: '#c4e2f3',
                    300: '#90cae9',
                    400: '#54b0dc',
                    500: '#2e96c9',
                    600: '#1f79aa',
                    700: '#1a608a',
                    800: '#1a5172',
                    900: '#0a1a24',
                },
            },
        },
    },

    plugins: [forms, typography, require('preline/plugin')],
    safelist: ['firefly'],


};
