const mix = require('laravel-mix');
require('laravel-mix-purgecss');
require('laravel-mix-bundle-analyzer');
const MomentLocalesPlugin = require('moment-locales-webpack-plugin');
require('laravel-mix-merge-manifest');
require('laravel-mix-alias');

mix.js('resources/js/front/app.js', 'public/js')
    .sass('resources/sass/front/default.scss', 'public/css/front')
    .mergeManifest()
    .options({ processCssUrls: false })
    .purgeCss({
        enabled: mix.inProduction(),
        content: [
            'resources/**/*',
            'vendor/akkurate/laravel-front-components/src/resources/**/*',
        ],
        whitelistPatterns: [
            /social-links/,
            /tooltip/,
            /fade/,
            /show/,
            /arrow/,
            /collaps/,
            /carousel/,
            /feedback/,
            /was-validated/,
            /^theme$/,
            /^theme-.+/,
            /-leave-active$/,
            /-enter-active$/,
            /-leave-to$/,
            /-enter-to$/,
            /-enter$/,
            /-leave$/,
            /^bot-.+/,
            /^section-.+/,
        ],
        exentions: ['html', 'js', 'php', 'vue'],
    });

mix.alias({
    '@': '/resources/js',
    '~': '/resources/sass',
});

mix.webpackConfig({
    plugins: [
        new MomentLocalesPlugin({
            localesToKeep: ['fr'],
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(
                __dirname,
                '~/Docker/akkurate-packages/back-components/resources/sass/'
            ),
        },
    }
});

if (process.env.ANALYZER === 'true') {
    mix.bundleAnalyzer();
}

if (mix.inProduction()) {
    mix.version();
} else {
    mix.sourceMaps();
}
