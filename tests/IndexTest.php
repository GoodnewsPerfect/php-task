<?php

use PHPUnit\Framework\TestCase;

require __DIR__."/../src/index.php";

class IndexTest extends TestCase
{
  // public function testManipulatingString()
  // {
  //   $this->assertEquals(strtoupper('foo'), 'FOO');
  // }

  public function testSolution0()
  {
    $input=2;
    $result=solution($input);

    $this->assertEquals($result, true);
  }

  public function testSolution1()
  {
    $input=24;
    $result=solution($input);
    $this->assertEquals($result, false);
  }

  public function testSolution2()
  {
    $input=37;
    $result=solution($input);
    $this->assertEquals($result, true);
  }

  public function testSolution3()
  {
    $input=73;
    $result=solution($input);
    $this->assertEquals($result, true);
  }

  public function testSolution4()
  {
    $input=97;
    $result=solution($input);
    $this->assertEquals($result, true);
  }

  public function testSolution5()
  {
    $input=56;
    $result=solution($input);
    $this->assertEquals($result, false);
  }
}
