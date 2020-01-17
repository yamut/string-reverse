<?php

namespace Interview\Solutions\Strings\Reverse\Factories;

use Interview\Solutions\Strings\Reverse\Constants;
use Interview\Solutions\Strings\Reverse\Exceptions\InvalidAlgorithmException;
use Interview\Solutions\Strings\Reverse\Interfaces\Factories\AlgorithmFactoryInterface;
use Interview\Solutions\Strings\Reverse\Types\AlgorithmType;
use Interview\Solutions\Strings\Reverse\Types\StringType;

class AlgorithmFactory implements AlgorithmFactoryInterface
{
    /**
     * @var StringType
     */
    private $algorithm;

    /**
     * @return AlgorithmFactory
     */
    public static function getInstance(): AlgorithmFactory
    {
        return new AlgorithmFactory();
    }

    /**
     * @param StringType $input
     * @return mixed
     * @throws InvalidAlgorithmException
     */
    public function runProcess($input)
    {
        return call_user_func(
            [
                '\Interview\Solutions\Strings\Reverse\Algorithms\\' .
                $this->getAlgorithm()->getAlgorithmName()->getValue(),
                'process',
            ],
            $input->toArrayType()->getValue()
        );
    }

    /**
     * @return AlgorithmType
     * @throws InvalidAlgorithmException
     */
    public function getAlgorithm(): AlgorithmType
    {
        return AlgorithmType::getInstance()->setAlgorithm($this->algorithm);
    }

    /**
     * @param AlgorithmType|null $algorithm
     * @return AlgorithmFactory
     * @throws InvalidAlgorithmException
     */
    public function setAlgorithm(AlgorithmType $algorithm = null): AlgorithmFactory
    {
        if ($algorithm === null) {
            $algorithm =
                AlgorithmType::getInstance()->setAlgorithm(
                    StringType::getInstance()
                        ->setValue(Constants::DEFAULT_ALGORITHM)
                );
        }
        $this->algorithm = $algorithm->getAlgorithmName();

        return $this;
    }
}
