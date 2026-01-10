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
                'primary-dark': '#645D15',
                'primary-gradient-start': '#F8E300',
                'primary-gradient-end': '#CDC02B',
                accent: '#3273DC',
                'cream': '#F2F0E6',
                'section-alt': '#CF58A3',
                'gray-dark': '#333333',
                'gray-medium': '#666666',
                'gray-light': '#F5F5F5',
                'gray-border': '#E0E0E0',
                success: '#2E7D32',
                error: '#C62828',
                warning: '#F9A825',
                info: '#3273DC',
            },
            backgroundImage: {
                'gold-gradient': 'linear-gradient(135deg, #F8E300 0%, #CDC02B 100%)',
                'gold-gradient-horizontal': 'linear-gradient(90deg, #F8E300 0%, #CDC02B 100%)',
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
