<?php

require_once dirname(__FILE__) . '/../When.php';

use When\When;

class When_Core_Tests extends \PHPUnit_Framework_TestCase
{	
	// passing an invalid DateTime
	public function testInvalidDate()
	{
		$this->setExpectedException('InvalidArgumentException');
		
		$r = new When();
		$r->recur('NOT A VALID TIME STAMP', 'yearly');
	}
	
	// passing an invalid Frequency
	public function testValidFrequencies()
	{
		$this->setExpectedException('InvalidArgumentException');
		
		$r = new When();
		$r->recur('2000-01-01', 'yearlyy');
	}
}
