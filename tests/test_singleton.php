<?php

use Patterns\Singleton\Singleton;
class SingletonTest extends PHPUnit_Framework_TestCase
{
	public function testCalis() {
		$this->assertEquals(0, 0);
	}

	public function testInstance() {
		$s = new Singleton;	
		$this->assertInstanceOf('Patterns\Singleton\Singleton', $s, 'Test Instance of singleton');
	}

	public function testDoubleInstance() {
		$s1 = new Singleton;	
		$s2 = new Singleton;	
		$this->assertEquals($s1, $s2, 'Test if both are the same instance');
	}
}