var babel = require('../node_modules/babel-core');

var options = JSON.parse(JSON.stringify(PHP.babelOptions));

print(babel.transform(PHP.sourceCode, options).code);
