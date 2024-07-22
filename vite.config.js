import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
    host: 'localhost',
    port: '8000'
  },
    plugins: [
        laravel([
            'css/app.css',
            'js/app.js',
        ]),
    ],
    resolve: {
        alias: {
            '@': '/js'
        }
    },

});
