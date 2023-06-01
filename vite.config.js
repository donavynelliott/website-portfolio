import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `
                    @import "~bootstrap/scss/bootstrap";
                    @import "resources/scss/_variables.scss";
                `
            }
        }
    },
    resolve: {
        alias: {
            '~bootstrap': path.resolve(new URL('./node_modules/bootstrap', import.meta.url).pathname),
        },
    },
});
