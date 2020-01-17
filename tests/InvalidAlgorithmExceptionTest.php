<?php

namespace Interview\Solutions\Strings\Reverse\Tests;

use Interview\Solutions\Strings\Reverse\Exceptions\InvalidAlgorithmException;
use PHPUnit\Framework\TestCase;

class InvalidAlgorithmExceptionTest extends TestCase
{
    public function testToString(): void
    {
        $foo =
            new InvalidAlgorithmException("foo");
        $this->assertEquals(
            "Interview\Solutions\Strings\Reverse\Exceptions\InvalidAlgorithmException: [0]: foo" .
            PHP_EOL,
            $foo->__toString()
        );
    }
}
