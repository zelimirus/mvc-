<?php
require_once "../index.php";

class exampleTest extends PHPUnit_Framework_TestCase {
	function testItCanAddTwoNumbers(){
		$a = 3;
		$b = 2;

		$this->assertEquals(5, add($a, $b));
	}

	function testItCanMultiplayTwoNubers(){
		$a = 2;
		$b = 2;

		$this->assertEquals(4, multiply($a, $b));
	}
}
