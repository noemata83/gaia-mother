const path = require('path');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
  entry: ["@babel/polyfill", "./assets/js/src/app.js"],
  output: {
    path: path.resolve(__dirname, "assets/js"),
    filename: "bundle.js"
  },
  module: {
    rules: [
      {
        test: /\.jsx?$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
              presets: [
                ['@babel/preset-env', {
                  "modules": false,
                  "targets": {
                    "browsers": ["> 1%", "last 2 versions", "ie >= 11"]
                    }
                }]],
              babelrc: false
          },
        }
      },
      {
        test: /\.js$/,
        loader: "imports-loader?define=>false"
      }
    ]
  },
  plugins: [
    new BrowserSyncPlugin({
      host: 'localhost',
      port: 3000,
      proxy: 'http://localhost',
      files: [
        '**/*.php',
        '**/*.css'
      ],
      reloadDelay: 0
    })
  ],
  mode: 'development'
}