var path = require('path');

// module.export = {
//     entry: path.resolve(__dirname, './resources/js/'),
//     output: {
//         filename: 'bundle.js',
//         path: path.resolve(__dirname, 'dist')
//     }
// }
module.exports = {
  entry: path.resolve(__dirname, './resources/js/'),
  output: {
    filename: "bundle.js",
    path: path.resolve(__dirname, 'dist')
  }
}