<?php

use Interview\Solutions\Strings\Reverse\Parameters\StringFactoryStringParameter;
use PHPUnit\Framework\TestCase;

class StringFactoryStringParameterTest extends TestCase {
	public function testInstance(): void {
		$this->assertInstanceOf( StringFactoryStringParameter::class,
			StringFactoryStringParameter::getInstance() );
	}

	public function setValueTest(): void {
		$value = "foo";
		$stringFactoryStringParameter = StringFactoryStringParameter::getInstance();
		$stringFactoryStringParameter->setValue( \Interview\Solutions\Strings\Reverse\Types\StringType::getInstance()
			->setValue( $value ) );
		$this->assertInstanceOf( "StringType", $stringFactoryStringParameter->getValue() );
	}

	public function getValueTest(): void {
		$value = "foo";
		$stringFactoryStringParameter = StringFactoryStringParameter::getInstance();
		$stringFactoryStringParameter->setValue( \Interview\Solutions\Strings\Reverse\Types\StringType::getInstance()
			->setValue( $value ) );
		$this->assertEquals( $value, $stringFactoryStringParameter->getValue()->getValue() );
	}
}
