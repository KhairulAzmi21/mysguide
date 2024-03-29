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
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                'white': '#ffffff',
                'primary' : {
                    100: '#F2F6F8',
                    200: '#99C8FC',
                    300: '#7999AD',
                    400: '#3E6286',
                    500: '#05285E',
                    600: '#011149',
                    700: '#000233',
                    800: '#01001A',
                    900: '#01001A',
                },
                'neutral' : {
                    100: '#FFFFFF',
                    200: '#F2F2F2',
                    300: '#E7E7E7',
                    400: '#DDDDDD',
                    500: '#D2D2D2',
                    600: '#9E9E9E',
                    700: '#696969',
                    800: '#000000',
                },
            },
        },
        
    },

    plugins: [forms],
};
