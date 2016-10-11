<?php // lesson/tests/PracticeTest.php
use \Practice;

class PracticeTest extends PHPUnit_Framework_TestCase {
  // public function testHelloWorld()
  // {
  //   $greeting = 'Hello, World.';
  //
  //   $this->assertTrue($greeting === 'Hello, World.');
  // }
  //
  // public function testAdd()
  // {
  //   $sum = 2 + 2;
  //   $this->assertEquals(4, $sum);
  // }
  //
  // public function testLaravelDevsIncludesDayle()
  // {
  //   $names = ['Taylor', 'Shawn', 'Dayle'];
  //   $this->assertContains('Dayle', $names);
  //   $this->assertNotContains('Troll', $names);
  // }
  //
  // public function testFamilyRequiresParent()
  // {
  //   $family = [
  //     'parents' => 'Joe',
  //     'children' => ['Timmy', 'Suzy']
  //   ];
  //
  //   $this->assertArrayHasKey('parents', $family); // true
  //   $this->assertInternalType('array', $family['children']);
  // }
  //
  // /**
  // * @expectedException InvalidArgumentException
  // */
  // // public function testCalculatesCommission()
  // // {
  // //   $commision = new Commision;
  // //   $commision->setSalePrice('fifteen dollars');
  // // }


  public function testFetchesItemsInArrayUntilKey()
  {
    //Arrange
    $practice = new Practice();
    $names = ['Taylor', 'Dayle', 'Matthew', 'Shawn', 'Neil'];

    //Act
    $result = $practice->array_until('Matthew', $names);

    //Assert
    $expected = ['Taylor', 'Dayle'];
    $this->assertEquals($expected, $result);
  }

  /**
  * @expectedException InvalidArgumentException
  */
  public function testThrowsExceptionIfKeyDoesExists()
  {
    //Given this set of data
    $practice = new Practice();
    $names = ['Taylor', 'Dayle', 'Matthew', 'Shawn', 'Neil'];

    // When I call the until function and
    // specify a different key
    $result = $practice->array_until('Bob', $names);

    // Then an exception should be thrown (see doc-block)
  }


}
