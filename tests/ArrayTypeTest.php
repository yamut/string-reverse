<?php

use Interview\Solutions\Strings\Reverse\Types\ArrayType;
use PHPUnit\Framework\TestCase;

class ArrayTypeTest extends TestCase {
	public function testBadValue(): void {
		$this->expectException( TypeError::class );
		ArrayType::getInstance()->setValue( '' )->toStringType();
	}

}
