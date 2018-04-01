const config = {
  entry: './src/index.js',
  output: {
    filename: 'bundle.js',
    path: __dirname + '/wp-content/themes/project-theme',
  },
  module: {
    rules: [{
      test: /\.jsx?$/,
      exclude: /node_modules/,
      use: {
        loader: 'babel-loader',
      },
    }],
  },
  plugins: [],
  resolve: {
    extensions: ['.js', '.jsx', '.json'],
  }
};

module.exports = config;
