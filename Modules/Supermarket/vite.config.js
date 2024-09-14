import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        outDir: '../../public/build-supermarket',
        emptyOutDir: true,
        manifest: true,
    },
    plugins: [
        laravel({
            publicDirectory: '../../public',
            buildDirectory: 'build-supermarket',
            input: [
                __dirname + '/resources/assets/sass/app.scss',
                __dirname + '/resources/assets/js/app.js'
            ],
            refresh: true,
        }),
    ],
});

//export const paths = [
//    'Modules/Supermarket/resources/assets/sass/app.scss',
//    'Modules/Supermarket/resources/assets/js/app.js',
//];