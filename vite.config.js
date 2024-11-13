import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/root.css',
                'resources/css/reset.css',
                'resources/css/app.css',
                'resources/css/public.css',
                'resources/css/dashboard.css',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
