<?php

use Interview\Solutions\Strings\Reverse\Exceptions\InvalidAlgorithmException;
use Interview\Solutions\Strings\Reverse\Types\AlgorithmType;
use Interview\Solutions\Strings\Reverse\Types\StringType;
use PHPUnit\Framework\TestCase;

class AlgorithmTypeTest extends TestCase {

	/**
	 * @throws \Interview\Solutions\Strings\Reverse\Exceptions\InvalidAlgorithmException
	 */
	public function testInvalidAlgorithmException(): void {
		$this->expectException( InvalidAlgorithmException::class );
		AlgorithmType::getInstance()->setAlgorithm( StringType::getInstance()->setValue( 'poop' ) );
	}

}