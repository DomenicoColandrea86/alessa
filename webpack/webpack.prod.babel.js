import webpackMerge from 'webpack-merge';
import ExtractTextPlugin from 'extract-text-webpack-plugin';
import webpackConfigBase from './webpack.base.babel';

const prodConfig = () =>
  webpackMerge(webpackConfigBase(), {

    module: {
      rules: [
        {
          test: /\.css$/,
          use: ExtractTextPlugin.extract({
            fallback: 'style-loader', use: 'css-loader!postcss-loader',
          }),
        },
        {
          test: /\.scss$/,
          use: ExtractTextPlugin.extract({
            fallback: 'style-loader', use: 'css-loader!postcss-loader!sass-loader',
          }),
        },
        {
          test: /\.woff2?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
          // Limiting the size of the woff fonts breaks font-awesome ONLY for the extract text plugin
          // use: "url?limit=10000"
          use: 'url-loader',
        },
      ],
    },

    plugins: [
      new ExtractTextPlugin('[name].bundle.css'),
    ],
  });

export default prodConfig;
