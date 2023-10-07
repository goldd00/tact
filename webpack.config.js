const webpack = require('webpack');
const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const FixStyleOnlyEntriesPlugin = require('webpack-fix-style-only-entries');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');


module.exports = {
    mode: 'production',
    entry: {
         // コンパイル対象のファイルを指定
        'script': path.resolve(__dirname, "./src/js/script.js"),
        'style.css': path.resolve(__dirname, './src/sass/style.scss')
    },
    // 出力設定
    output: {
        path: path.resolve(__dirname, './dist/'),
        filename: 'js/[name].js'
    },
    module: {
        rules: [
            // sassのコンパイル設定
            {
                test: /\.(sa|sc|c)ss$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            url: false,
                        }
                    },
                    'postcss-loader',
                    'sass-loader',
                ]
            },
            {
                 // 拡張子 .js の場合
                test: /\.js$/,
                use: [
                    {
                        // Babel を利用する
                        loader: "babel-loader",
                        // Babel のオプションを指定する
                        options: {
                            presets: [
                                // プリセットを指定することで、ES2020 を ES5 に変換
                                "@babel/preset-env",
                            ],
                        },
                    },
                ],
            }
        ]
    },
    target: ["web", "es5"],
    plugins: [
        new CleanWebpackPlugin({
            cleanOnceBeforeBuildPatterns: [
                '**/*',
            ],
        }),
        new FixStyleOnlyEntriesPlugin(),
        new MiniCssExtractPlugin({
            filename: 'css/[name]'
        }),
    ],
    watchOptions: {
        ignored: /node_modules/
    },
};