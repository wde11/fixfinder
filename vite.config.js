import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/images/fixfinderlogo.png',
                'resources/images/fixfinderlogo_white.png',
                'resources/images/fixfinderlogo_white_v2.png',
                'resources/images/justin.jpg',
                'resources/images/renz.jpg',
                'resources/images/troy.jpg',
            ],
            refresh: true,
        }),
        tailwindcss(),
        react(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
