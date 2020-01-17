<?php

namespace Interview\Solutions\Strings\Reverse\Tests;

use Interview\Solutions\Strings\Reverse\Exceptions\InvalidAlgorithmException;
use Interview\Solutions\Strings\Reverse\Factories\AlgorithmFactory;
use PHPUnit\Framework\TestCase;

class AlgorithmFactoryTest extends TestCase
{
    public function testAlgorithmFactoryGetInstance(): void
    {
        $this->assertInstanceOf(
            AlgorithmFactory
            ::class,
            AlgorithmFactory::getInstance()
        );
    }

    /**
     * @throws InvalidAlgorithmException
     */
    public function testNullAlgorithm(): void
    {
        $this->assertInstanceOf(
            AlgorithmFactory::class,
            AlgorithmFactory::getInstance()->setAlgorithm(null)
        );
    }
}
