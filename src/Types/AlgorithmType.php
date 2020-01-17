<?php

namespace Interview\Solutions\Strings\Reverse\Types;

use Interview\Solutions\Strings\Reverse\Constants;
use Interview\Solutions\Strings\Reverse\Exceptions\InvalidAlgorithmException;
use Interview\Solutions\Strings\Reverse\Interfaces\Types\AlgorithmTypeInterface;

class AlgorithmType implements AlgorithmTypeInterface
{

    /**
     * @var StringType
     */
    private $algorithm;

    /**
     * @return AlgorithmType
     */
    public static function getInstance(): AlgorithmType
    {
        return new AlgorithmType();
    }

    /**
     * @param StringType $algorithm
     * @return AlgorithmType
     * @throws InvalidAlgorithmException
     */
    public function setAlgorithm(StringType $algorithm): AlgorithmType
    {
        if (!self::isValidAlgorithm($algorithm)) {
            throw new InvalidAlgorithmException("Invalid algorithm: " . $algorithm->getValue());
        } else {
            $this->algorithm = $algorithm;
        }

        return $this;
    }

    /**
     * @param StringType $algorithm
     * @return bool
     */
    private static function isValidAlgorithm(StringType $algorithm): bool
    {
        return in_array($algorithm->getValue(), Constants::SUPPORTED_ALGORITHMS);
    }

    /**
     * @return StringType
     */
    public function getAlgorithmName(): StringType
    {
        return $this->algorithm;
    }
}
