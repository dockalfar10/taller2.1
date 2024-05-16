import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        // configura la ruta a la carpeta public
        publicDir: '../public'
    },
    build: {
        // configura la ruta a la carpeta resources
        outDir: '../public/build',
        emptyOutDir: true,
        manifest: true,
        rollupOptions: {
            input: '/resources/js/app.js',
        },
    },
});
