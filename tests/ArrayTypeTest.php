<?php

namespace Interview\Solutions\Strings\Reverse\Tests;

use Interview\Solutions\Strings\Reverse\Types\ArrayType;
use PHPUnit\Framework\TestCase;
use TypeError;

class ArrayTypeTest extends TestCase
{
    public function testBadValue(): void
    {
        $this->expectException(TypeError::class);
        ArrayType::getInstance()->setValue('')->toStringType();
    }

    public function testArrayArrayToString(): void
    {
        $stringType =
            ArrayType::getInstance()->setValue(['foo', ['bar', 'baz']])->toStringType();
        $this->assertEquals('foobarbaz', $stringType->getValue());
    }
}
