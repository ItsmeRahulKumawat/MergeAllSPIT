import { build, defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    // change output dir of build to public/proposal_outreach
    build: {
        outDir: 'public/proposal_outreach/build',
    },
    plugins: [

        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
