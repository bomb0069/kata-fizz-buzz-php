<?php
require_once ('FizzBuzz.php');

class FizzBuzzTest extends PHPUnit_Framework_TestCase {

    function setUp(){
        $this->fizzBuzz = new FizzBuzz();
    }

    function testFizzBuzzWith1ShouldBeReturn1() {
        $actual = $this->fizzBuzz->getString(1);
        $this->assertEquals('1', $actual);
    }

    function testFizzBuzzWith2ShouldBeReturn2() {
        $actual = $this->fizzBuzz->getString(2);
        $this->assertEquals('2', $actual);
    }

    function testFizzBuzzWith3ShouldBeReturnFizz(){
        $actual = $this->fizzBuzz->getString(3);
        $this->assertEquals('Fizz',$actual);
    }

    function testFizzBuzzWith5ShouldBeReturnBuzz(){
        $actual = $this->fizzBuzz->getString(5);
        $this->assertEquals('Buzz',$actual);
    }

    function testFizzBuzzWith6ShouldBeReturnFizz(){
        $actual = $this->fizzBuzz->getString(6);
        $this->assertEquals('Fizz',$actual);
    }

    function testFizzBuzzWith10ShouldBeReturnBuzz(){
        $actual = $this->fizzBuzz->getString(10);
        $this->assertEquals('Buzz',$actual);
    }

    function testFizzBuzzWith15ShouldBeReturnFizzBuzz(){
        $actual = $this->fizzBuzz->getString(15);
        $this->assertEquals('FizzBuzz',$actual);
    }
}

?>
