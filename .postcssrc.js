module.exports = {
  plugins: {
    'postcss-easy-import': {
      glob: true,
      onImport: sources => {
        // global.watchCSS(sources, this.from);
      },
    },
    'postcss-simple-vars': null,
    'postcss-nested': null,
    'autoprefixer': {
      browsers: ['last 8 versions'],
    },
  },
};
