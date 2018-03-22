<?php

use PHPUnit\Framework\TestCase;

class InvalidAlgorithmExceptionTest extends TestCase {
	public function testToString(): void {
		$foo =
			new \Interview\Solutions\Strings\Reverse\Exceptions\InvalidAlgorithmException( "foo" );
		$this->assertEquals( "Interview\Solutions\Strings\Reverse\Exceptions\InvalidAlgorithmException: [0]: foo" .
							 PHP_EOL, $foo->__toString() );
	}
}