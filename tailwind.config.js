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
                dynapuff : ['dynapuff']
            },
            backgroundColor :{
                sujoe : '#FCB92D',
                sujoe_base : '#F3F3F3', 
            },
            textColor : {
                primary : '#51342E',
                secondary : '#FCB92D'
            },
            lineHeight :{
                sujoe : '100px'
            }
        },
    },

    plugins: [forms],
};
