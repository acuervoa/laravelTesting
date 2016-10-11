<?php

class FunctionsTest extends PHPUnit_Framework_TestCase {

  public function testBuildsAnchorTag()
  {
    $actual = link_toto('dogs/1', 'Show Dog');
    $expect = "<a href='http://:/dogs/1'>Show Dog</a>";

    $this->assertEquals($expect, $actual);
  }
}
 ?>
