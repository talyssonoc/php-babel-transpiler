<?php

namespace Babel;

class Transpiler {
    public static $v8;
    public static $babel;

    /**
     * Transform the source code
     * @param  string $sourceCode Source code to transform
     * @param array $options Associative array of options that will be passed to Babel
     * @return string             Transformed source code
     */
    public static function transform($sourceCode, $options = []) {
        $options = array_merge($options, [ 'ast' => false ]);

        // The compiled bundle will use this attributes as
        // `PHP.sourceCode` and `PHP.babelOptions`.
        // Check `src/executor.js`.
        self::$v8->sourceCode = $sourceCode;
        self::$v8->babelOptions = $options;

        try {
            ob_start();
            self::$v8->executeString(self::$babel);
            return ob_get_contents();
        }
        catch(\V8JsException $e) {
            ob_end_clean();
            echo $e->getMessage();
            return '';
        }
    }

    /**
     * Transform the content of a file
     * @param  string $filePath Absolute path of the file
     * @param array $options Associative array of options that will be passed to Babel
     * @return string           Transformed content of the file
     */
    public static function transformFile($filePath, $options = []) {
        try {
            $fileContent = file_get_contents($filePath);
        }
        catch(\Exception $e) {
            echo $e->getMessage();
            return '';
        }

        return self::transform($fileContent, $options);
    }
}

Transpiler::$v8 = new \V8Js();
Transpiler::$babel = file_get_contents(realpath(dirname(__FILE__) . '/../assets/executor.bundle.js'));
