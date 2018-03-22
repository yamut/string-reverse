<?php

use PHPUnit\Framework\TestCase;

class AlgorithmsDoesNothingTest extends TestCase {

	public function testNothing() {
		\Interview\Solutions\Strings\Reverse\Algorithms\Algorithm::process( null );
		$this->assertTrue( true );
	}

}