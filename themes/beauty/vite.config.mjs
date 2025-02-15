import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        outDir: 'assets/dist',
        assetsDir: '',
    },
    server: {
        host: '0.0.0.0',
        port: 5173,
        cors: true,
        hmr: {
            host: 'robot.local',
            protocol: 'ws',
            port: 5173,
        },
        
        watch: {
            usePolling: true 
        }
    },
    plugins: [
        laravel({
            publicDirectory: 'assets/dist',
            input: [
                'assets/src/css/theme-lancasters.css',
                'assets/src/js/theme-lancasters.js',
            ],
            refresh: {
                paths: [
                    './**/*.htm',
                    './**/*.block',
                    'assets/src/**/*.css', 
                    'assets/src/**/*.js',  
                ]
            },
            middlewareMode: true,
        }),
    ],
    base: 'http://robot.local/beauty-awakening/',
});