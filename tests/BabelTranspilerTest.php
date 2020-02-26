<?php

use Babel\Transpiler;

class BabelTranspilerTest extends PHPUnit_Framework_TestCase {

  public function testBundleGeneration() {
    $this->assertFileExists(realpath(dirname(__FILE__) . '/../assets/executor.bundle.js'));
  }

  public function testFileNotExist() {
    $this->assertEquals(Transpiler::transformFile('/not/existent.php'), '');
  }

  public function testOptions() {
    $compiled = Transpiler::transform('class MyClass {}', [ 'blacklist' => [ 'useStrict' ]]);

    $this->assertNotEquals($compiled, '');
    $this->assertNotContains('"use strict";', $compiled);
  }
}
