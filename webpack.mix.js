const webpack = require('webpack');
const mix = require('laravel-mix');
require('laravel-mix-purgecss');
const glob = require('glob');
const path = require('path');

Mix.listen('configReady', webpackConfig => {
    webpackConfig.module.rules.forEach(rule => {
        if (Array.isArray(rule.use)) {
            rule.use.forEach(ruleUse => {
                if (ruleUse.loader === 'resolve-url-loader') {
                    ruleUse.options.engine = 'postcss';
                }
            });
        }
    });
});
mix.webpackConfig({
    plugins: [
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            'window.jQuery': 'jquery'
        }),
    ],
    module: {
        rules: [
            {
                test: /\.svg(\?.*)?$/,
                use: [
                    {
                        loader: 'svgo-loader',
                        options: {
                            plugins: [
                                {removeTitle: true},
                                {convertColors: {shorthex: false}},
                                {convertPathData: false}
                            ]
                        }
                    }
                ]
            }
        ]
    }
});
mix.options({
    processCssUrls: true,
    postCss: [
        require('postcss-discard-comments')({
            removeAll: true,
        }),
    ],
});
mix.purgeCss({
    whitelistPatterns: [
        /emoji/,
        /owl-/,
    ]
});
mix.version();

mix
    .sass('resources/assets/scss/app.scss', 'css')
    .js('resources/assets/js/app.js', 'public/js/app.js')
;

glob.sync(path.resolve(__dirname, 'resources', 'assets', 'img') + '/**/*').forEach(img => {
    mix.copy(img, img.replace(path.resolve(__dirname, 'resources', 'assets', 'img'), 'public/images'));
});
