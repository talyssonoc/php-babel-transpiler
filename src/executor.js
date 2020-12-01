var babel = require("@babel/core");

var babel_presets = require("@babel/preset-react");

var options = JSON.parse(JSON.stringify(PHP.babelOptions));
options.presets = [babel_presets];
options.plugins = ["@babel/plugin-syntax-dynamic-import"];
print(babel.transform(PHP.sourceCode,options).code);
