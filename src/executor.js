var babel = require("@babel/core");

var babel_presets = require("@babel/preset-react");

var options = JSON.parse(JSON.stringify(PHP.babelOptions));

print(babel.transform(PHP.sourceCode,{presets:[babel_presets]}).code);
