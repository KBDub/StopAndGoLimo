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
                /* ── Top 5 Pct legacy tokens (kept for backward compat) ── */
                'sunburst': {
                    light: '#FFD93D',
                    DEFAULT: '#FFC20E',
                    dark: '#E6A500',
                },
                'azure': {
                    light: '#5A9AE8',
                    DEFAULT: '#3273DC',
                    dark: '#2558A8',
                },
                'linen': {
                    light: '#FAF9F5',
                    DEFAULT: '#F2F0E6',
                    dark: '#E8E5D8',
                },
                'charcoal': {
                    lighter: '#999999',
                    light: '#555555',
                    DEFAULT: '#2C2C2C',
                    dark: '#1A1A1A',
                },
                'olive': {
                    DEFAULT: '#A39822',
                },
                'blush-pink': '#FBCDCE',
                'success': '#4CAF50',
                'warning': '#F9A825',
                'error': '#C62828',

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
                'signal': {
                    light: '#FFD65E',
                    DEFAULT: '#FEC42D',
                    dark: '#E0A800',
                },
                'cloud': {
                    light: '#F4F5F7',
                    DEFAULT: '#E8E9EC',
                    dark: '#D4D6DB',
                },
                'muted': {
                    light: '#8B939C',
                    DEFAULT: '#69727D',
                    dark: '#4A5159',
                },
                'stopngo-success': '#2E9E6B',
                'stopngo-warning': '#E0A800',
                'stopngo-error': '#C0392B',
            },
            backgroundImage: {
                /* Top 5 Pct legacy gradients */
                'gold-gradient': 'linear-gradient(135deg, #FFC20E 0%, #FFD93D 100%)',
                'gold-gradient-light': 'linear-gradient(135deg, #FFD93D 0%, #FFE680 100%)',
                'gold-gradient-dark': 'linear-gradient(135deg, #FFC20E 0%, #E6A500 100%)',
                'gold-gradient-horizontal': 'linear-gradient(90deg, #FFC20E 0%, #FFD93D 100%)',
                'warm-gradient': 'linear-gradient(135deg, #FFF9E6 0%, #F2F0E6 100%)',
                /* Twilight Luxe brand gradients */
                'grad-midnight-hero': 'linear-gradient(135deg, #15152C 0%, #252235 100%)',
                'grad-deep-twilight': 'linear-gradient(135deg, #0F1223 0%, #15152C 60%, #252235 100%)',
                'grad-champagne-shine': 'linear-gradient(135deg, #DCB57E 0%, #E9C79E 100%)',
                'grad-navy-to-gold': 'linear-gradient(135deg, #15152C 0%, #252235 55%, #DCB57E 140%)',
                'grad-champagne-rule': 'linear-gradient(90deg, transparent, #C49A5E 20%, #DCB57E 50%, #C49A5E 80%, transparent)',
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
                'gold': '0 4px 20px rgba(255, 194, 14, 0.15)',
                'gold-lg': '0 8px 30px rgba(255, 194, 14, 0.25)',
                'gold-xl': '0 0 25px rgba(255, 194, 14, 0.55), 0 8px 45px rgba(255, 194, 14, 0.65)',
                'champagne': '0 4px 20px rgba(220, 181, 126, 0.20)',
                'champagne-lg': '0 8px 30px rgba(220, 181, 126, 0.32)',
                'champagne-xl': '0 0 25px rgba(220, 181, 126, 0.45), 0 8px 45px rgba(220, 181, 126, 0.35)',
                'signal': '0 10px 26px rgba(254, 196, 45, 0.30)',
            },
        },
    },
    safelist: [
        'translate-x-1',
        'translate-x-6',
    ],
    plugins: [],
};
