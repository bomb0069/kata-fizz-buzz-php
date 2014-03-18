<?php
require_once ('FizzBuzz.php');

class FizzBuzzTest extends PHPUnit_Framework_TestCase {

	function testFizzBuzzWith1ShouldBeReturn1() {
		$fizzBuzz = new FizzBuzz();
		$this->assertEquals('1', $fizzBuzz->getString(1));
	}
}

?>