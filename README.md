# PHP Babel Transpiler

[![Build Status](https://travis-ci.org/talyssonoc/php-babel-transpiler.svg)](https://travis-ci.org/talyssonoc/php-babel-transpiler)

Transform JavaScript with [Babel](https://babeljs.io/) from PHP.

## Installation

### V8Js dependency

It's important to know that `php-babel-transpiler` has a dependency of the [v8js](https://pecl.php.net/package/v8js) PHP extension.

You can see how to install it here: [how to install V8Js](https://github.com/talyssonoc/react-laravel/blob/master/install_v8js.md).

### Composer

```sh
  php composer.phar require talyssonoc/php-babel-transpiler
```

## Usage

```php
  $transpiledCode = Babel\Transpiler::transform('class MyClass {  }');
  $otherTranspiledCode = Babel\Transpiler::transformFile('/my/Class.js', [ 'blacklist' => [ 'useStrict' ] ]);
```

## API

- `Babel\Transpiler::transform($sourceCode, $babelOptions)`: Transpile the given source code, passing the given options to Babel, and return the transformed code.
- `Babel\Transpiler::transformFile($filePath, $babelOptions)`: Transpile the file with the given **absolute** path, passing the given options to Babel, and return the transformed code.

## License

The MIT License (MIT)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE
