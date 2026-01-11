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
                'sunburst': '#FFC20E',
                'linen': '#F2F0E6',
                'charcoal': '#2C2C2C',
                'slate': '#666666',
                'azure': '#3273DC',
                'azure-dark': '#2563c4',
                primary: '#FFC20E',
                secondary: '#3273DC',
                accent: '#3273DC',
                'gray-medium': '#666666',
                'gray-light': '#F5F5F5',
                'gray-border': '#E0E0E0',
                success: '#4CAF50',
                error: '#C62828',
                warning: '#F9A825',
                info: '#3273DC',
            },
            backgroundImage: {
                'gold-gradient': 'linear-gradient(135deg, #FFC20E 0%, #FFD93D 100%)',
                'gold-gradient-dark': 'linear-gradient(135deg, #FFC20E 0%, #E6A500 100%)',
                'gold-gradient-horizontal': 'linear-gradient(90deg, #FFC20E 0%, #FFD93D 100%)',
                'warm-gradient': 'linear-gradient(135deg, #FFF9E6 0%, #F2F0E6 100%)',
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
            boxShadow: {
                'gold': '0 4px 20px rgba(255, 194, 14, 0.15)',
                'gold-lg': '0 8px 30px rgba(255, 194, 14, 0.25)',
            },
        },
    },
    plugins: [],
};
