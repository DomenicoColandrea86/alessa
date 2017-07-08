import webpack from 'webpack';
import path from 'path';
import autoprefixer from 'autoprefixer';
import bootstrapEntryPoints from './webpack.bootstrap.babel';

const paths = {
  dist: path.resolve(__dirname, '../dist'),
  js: path.resolve(__dirname, '../js'),
};

// eslint-disable-next-line no-console
console.log(`=> bootstrap-loader configuration: ${process.env.NODE_ENV === 'production' ? bootstrapEntryPoints.prod : bootstrapEntryPoints.dev}`);

const baseConfig = () => ({
  context: paths.js,
  // For production build we want to extract CSS to stand-alone file
  // Provide `extractStyles` param and `bootstrap-loader` will handle it
  entry: {
    app: [
      'font-awesome-loader',
      process.env.NODE_ENV === 'production' ? bootstrapEntryPoints.prod : bootstrapEntryPoints.dev,
      'tether',
      './app.js',
    ],
  },

  output: {
    filename: '[name].bundle.js',
    path: paths.dist,
  },

  resolve: { extensions: ['*', '.js'] },

  module: {
    rules: [
      {
        test: /bootstrap\/dist\/js\/umd\//,
        use: 'imports-loader?jQuery=jquery',
      },
      {
        test: /\.(jpg|png|gif)$/,
        use: 'file-loader?name=images/[name].[ext]',
      },
      {
        test: /\.(woff|woff2|otf|ttf|eot)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        use: [
          {
            loader: 'url-loader',
            options: {
              limit: 10000,
              name: 'fonts/[name].[ext]',
            },
          },
        ],
      },
      {
        test: /\.(mp4|ogg|svg)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        use: [{ loader: 'file-loader' }],
      },
    ],
  },
  plugins: [
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery',
      'window.jQuery': 'jquery',
      Tether: 'tether',
      'window.Tether': 'tether',
      Alert: 'exports-loader?Alert!bootstrap/js/dist/alert',
      Button: 'exports-loader?Button!bootstrap/js/dist/button',
      Carousel: 'exports-loader?Carousel!bootstrap/js/dist/carousel',
      Collapse: 'exports-loader?Collapse!bootstrap/js/dist/collapse',
      Dropdown: 'exports-loader?Dropdown!bootstrap/js/dist/dropdown',
      Modal: 'exports-loader?Modal!bootstrap/js/dist/modal',
      Popover: 'exports-loader?Popover!bootstrap/js/dist/popover',
      Scrollspy: 'exports-loader?Scrollspy!bootstrap/js/dist/scrollspy',
      Tab: 'exports-loader?Tab!bootstrap/js/dist/tab',
      Tooltip: 'exports-loader?Tooltip!bootstrap/js/dist/tooltip',
      Util: 'exports-loader?Util!bootstrap/js/dist/util',
    }),
    new webpack.LoaderOptionsPlugin({
      postcss: [autoprefixer],
    }),
    new webpack.optimize.ModuleConcatenationPlugin(),
  ],
});

export default baseConfig;
