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
            colors: {
                'primary-dark': '#000000',
                'secondary-dark': '#1a1a1a',
                'primary-yellow': '#F6E71D',
                'secondary-yellow': '#F5D10D',
                'light-gray': '#f8f9fa',
                'medium-gray': '#6c757d',
            },
            textColor: ['hover'],
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'hero': ['3rem', { lineHeight: '1.1' }],
                'display': ['2rem', { lineHeight: '1.2' }],
            },
            spacing: {
                'section': '6rem',
                'hero': '8rem',
            },
            borderRadius: {
                'xl': '1rem',
                '2xl': '1.5rem',
            },
            boxShadow: {
                'card': '0 10px 30px rgba(0, 0, 0, 0.08)',
                'card-hover': '0 20px 40px rgba(0, 0, 0, 0.12)',
            },
            animation: {
                'gradient': 'gradientShift 8s ease infinite',
            },
            keyframes: {
                gradientShift: {
                    '0%, 100%': { backgroundPosition: '0% 50%' },
                    '50%': { backgroundPosition: '100% 50%' },
                },
            },
        },
    },

    plugins: [forms],
};
