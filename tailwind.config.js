import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                primary: '#CDBF2B',
                accent: '#3273DC',
                'gray-dark': '#333333',
                'gray-medium': '#666666',
                'gray-light': '#F5F5F5',
                'gray-border': '#E0E0E0',
                success: '#2E7D32',
                error: '#C62828',
            },
            fontFamily: {
                sans: ['Titillium Web', 'Arial', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'h1': ['32px', { lineHeight: '1.2', fontWeight: '700' }],
                'h2': ['24px', { lineHeight: '1.3', fontWeight: '700' }],
                'h3': ['20px', { lineHeight: '1.3', fontWeight: '600' }],
                'h4': ['18px', { lineHeight: '1.4', fontWeight: '600' }],
                'h5': ['16px', { lineHeight: '1.4', fontWeight: '600' }],
            },
            spacing: {
                '18': '72px',
                '22': '88px',
            },
            borderRadius: {
                'sm': '2px',
            },
        },
    },
    plugins: [],
};
