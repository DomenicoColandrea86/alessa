import webpack from 'webpack';
import webpackMerge from 'webpack-merge';
import webpackConfigBase from './webpack.base.babel';

const devConfig = () =>
  webpackMerge(webpackConfigBase(), {

    watch: true,

    watchOptions: {
      aggregateTimeout: 300,
      poll: 1000,
    },

    module: {
      rules: [
        {
          test: /\.css$/,
          use: ['style-loader', 'css-loader', 'postcss-loader'],
        },
        {
          test: /\.scss$/,
          use: ['style-loader', 'css-loader', 'postcss-loader', 'sass-loader'],
        },
        {
          test: /\.woff2?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
          use: 'url-loader?limit=10000',
        },
      ],
    },

    plugins: [
      new webpack.HotModuleReplacementPlugin(),
      new webpack.NoEmitOnErrorsPlugin(),
    ],
  });

export default devConfig;
