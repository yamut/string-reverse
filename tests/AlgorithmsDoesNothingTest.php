<?php

namespace Interview\Solutions\Strings\Reverse\Tests;

use Interview\Solutions\Strings\Reverse\Algorithms\Algorithm;
use PHPUnit\Framework\TestCase;

class AlgorithmsDoesNothingTest extends TestCase
{

    public function testNothing()
    {
        Algorithm::process(null);
        $this->assertTrue(true);
    }
}
