import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                    'resources/js/modules/skills-item.js',
                    'resources/js/modules/work-exp-item.js',
                    'resources/js/modules/school-bg-item.js',
                    'resources/js/modules/download-form.js',
                    'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
