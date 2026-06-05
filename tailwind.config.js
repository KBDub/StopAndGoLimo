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
                /* ── Twilight Luxe — Stop & Go Limo brand tokens ── */
                'navy': {
                    light: '#252235',
                    DEFAULT: '#15152C',
                    dark: '#0F1223',
                },
                'champagne': {
                    light: '#E9C79E',
                    DEFAULT: '#DCB57E',
                    dark: '#C49A5E',
                },
                'cloud': {
                    light: '#F4F5F7',
                    DEFAULT: '#E8E9EC',
                    dark: '#D4D6DB',
                },
                'slate': {
                    light: '#8B939C',
                    DEFAULT: '#69727D',
                    dark: '#4A5159',
                },
                /* Legacy alias — retire after blade sweep */
                'muted': {
                    light: '#8B939C',
                    DEFAULT: '#69727D',
                    dark: '#4A5159',
                },
                'azure': {
                    light: '#94ACDB',
                    DEFAULT: '#5A7EC8',
                    dark: '#385A9F',
                },
                'stopngo-success': '#2E9E6B',
                'stopngo-warning': '#E0A800',
                'stopngo-error': '#C0392B',
            },
            backgroundImage: {
                /* Twilight Luxe brand gradients */
                'grad-midnight-hero':   'linear-gradient(135deg, #15152C 0%, #252235 100%)',
                'grad-deep-twilight':   'linear-gradient(135deg, #0F1223 0%, #15152C 60%, #252235 100%)',
                'grad-champagne-shine': 'linear-gradient(135deg, #DCB57E 0%, #E9C79E 100%)',
                'grad-shine':           'linear-gradient(135deg, #DCB57E 0%, #E9C79E 100%)',
                'grad-navy-to-gold':    'linear-gradient(135deg, #15152C 0%, #252235 55%, #DCB57E 140%)',
                'grad-champagne-rule':  'linear-gradient(90deg, transparent, #C49A5E 20%, #DCB57E 50%, #C49A5E 80%, transparent)',
            },
            fontFamily: {
                sans: ['Titillium Web', 'Arial', ...defaultTheme.fontFamily.sans],
                head: ['Poppins', 'Arial', ...defaultTheme.fontFamily.sans],
                body: ['Montserrat', 'Arial', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'h1': ['32px', { lineHeight: '1.2', fontWeight: '700' }],
                'h2': ['32px', { lineHeight: '1.3', fontWeight: '700' }],
                'h3': ['28px', { lineHeight: '1.3', fontWeight: '600' }],
                'h4': ['24px', { lineHeight: '1.4', fontWeight: '600' }],
                'h5': ['20px', { lineHeight: '1.4', fontWeight: '600' }],
            },
            spacing: {
                '18': '72px',
                '22': '88px',
            },
            borderRadius: {
                'sm': '2px',
            },
            boxShadow: {
                'champagne':    '0 4px 20px rgba(220, 181, 126, 0.20)',
                'champagne-lg': '0 8px 30px rgba(220, 181, 126, 0.32)',
                'champagne-xl': '0 0 25px rgba(220, 181, 126, 0.45), 0 8px 45px rgba(220, 181, 126, 0.35)',
                'azure':        '0 4px 20px rgba(90, 126, 200, 0.20)',
                'azure-lg':     '0 8px 30px rgba(90, 126, 200, 0.32)',
            },
        },
    },
    safelist: [
        'translate-x-1',
        'translate-x-6',
    ],
    plugins: [],
};
