<?php

namespace Interview\Solutions\Strings\Reverse\Tests;

use Interview\Solutions\Strings\Reverse\Parameters\StringFactoryStringParameter;
use Interview\Solutions\Strings\Reverse\Types\StringType;
use PHPUnit\Framework\TestCase;

class StringFactoryStringParameterTest extends TestCase
{
    public function testInstance(): void
    {
        $this->assertInstanceOf(
            StringFactoryStringParameter::class,
            StringFactoryStringParameter::getInstance()
        );
    }

    public function testSetValue(): void
    {
        $value = "foo";
        $stringFactoryStringParameter = StringFactoryStringParameter::getInstance();
        $stringFactoryStringParameter->setValue(
            StringType::getInstance()
                ->setValue($value)
        );
        $this->assertInstanceOf(StringType::class, $stringFactoryStringParameter->getValue());
    }

    public function testGetValue(): void
    {
        $value = "foo";
        $stringFactoryStringParameter = StringFactoryStringParameter::getInstance();
        $stringFactoryStringParameter->setValue(
            StringType::getInstance()
                ->setValue($value)
        );
        $this->assertEquals($value, $stringFactoryStringParameter->getValue()->getValue());
    }
}
