<?php // lesson/tests/DateFormatterTest.php

use \DateFormatter;

class DateFormatterTest extends PHPUnit_Framework_TestCase {
  public function testStampMustBeInstanceOfDateTime()
  {
    $date = new DateFormatter(new DateTime);
    $this->assertInstanceOf('DateTime', $date->getStamp());
  }
}
