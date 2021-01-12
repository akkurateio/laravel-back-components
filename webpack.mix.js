const mix = require('laravel-mix');
require('laravel-mix-purgecss');
require('laravel-mix-bundle-analyzer');
const MomentLocalesPlugin = require('moment-locales-webpack-plugin');
const CompressionPlugin = require('compression-webpack-plugin');
require('laravel-mix-merge-manifest');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.options({ processCssUrls: false });
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app/default.scss', 'public/css/app')
    .mergeManifest();

// if (process.env.APP_THEME) {
//     mix.sass(`resources/sass/app/${process.env.APP_THEME}.scss`, 'public/css/app/', {
//         implementation: require('node-sass'),
//     });
//
//     mix.sass(`resources/sass/site/${process.env.APP_THEME}.scss`, 'public/css/site/', {
//         implementation: require('node-sass'),
//     });
// }

mix.webpackConfig({
    module: {
        rules: [],
    },
    plugins: [
        new MomentLocalesPlugin({
            localesToKeep: ['fr'],
        }),
        new CompressionPlugin(),
    ],
    resolve: {
        alias: {
            '@': path.resolve(
                __dirname,
                '~/Docker/akkurate-packages/back-components/resources/sass/'
            ),
        },
    },
    output: {
        publicPath: '/',
        chunkFilename: 'js/app/[name].js',
    }
});

if (process.env.ANALYZER === 'true') {
    mix.bundleAnalyzer();
}

if (mix.inProduction()) {
    mix.version();
}
