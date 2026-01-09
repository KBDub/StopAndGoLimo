import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig(({ mode }) => {
    const env = loadEnv(mode, process.cwd(), '');
    const replitHost = env.REPLIT_DEV_DOMAIN || null;

    return {
        plugins: [
            laravel({
                input: ['resources/css/app.css', 'resources/js/app.js'],
                refresh: true,
            }),
        ],
        server: {
            host: '0.0.0.0',
            port: 5173,
            hmr: replitHost ? {
                host: replitHost,
                protocol: 'wss',
                clientPort: 443,
            } : {
                host: 'localhost',
            },
            allowedHosts: true,
        },
    };
});
