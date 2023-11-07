import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss', // Your SCSS entry
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        // vue(),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `$primary-color: #ff3e00;` // Example variable
                // Or you could use `@import` to include global SCSS files
                // additionalData: `@import "./resources/scss/variables.scss";`
            }
        }
    }
});
