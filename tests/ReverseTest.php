<?php

namespace Interview\Solutions\Strings\Reverse\Tests;

use Interview\Solutions\Strings\Reverse\Algorithms\ReverseAlgorithm;
use Interview\Solutions\Strings\Reverse\Exceptions\InvalidAlgorithmException;
use Interview\Solutions\Strings\Reverse\Reverse;
use PHPUnit\Framework\TestCase;
use UnexpectedValueException;

final class ReverseTest extends TestCase
{

    /**
     * @throws InvalidAlgorithmException
     */
    public function testDoesStringReverse(): void
    {
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        $chars_array = str_split($chars);
        $length = 10;
        $string = "";
        for ($i = 0; $i < $length; $i++) {
            $string .= array_rand($chars_array);
        }
        $this->assertEquals(strrev($string), Reverse::reverseString($string));
    }

    public function testBadInputProcess(): void
    {
        $this->expectException(UnexpectedValueException::class);
        ReverseAlgorithm::process('foo');
    }
}
