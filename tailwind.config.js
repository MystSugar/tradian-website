import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                inter: ['Inter'],
                arimo: ['Arimo'],
                lato: ['Lato'],
                lora: ['Lora']
            },
            dropShadow: {
                '3xl': '0 20px 60px rgba(106, 30, 108, 0.3)',
            },
            colors: {
                white: '#FAFAFA', 
                black: '#333333', 
            }
        },
    },

    plugins: [forms],
};
