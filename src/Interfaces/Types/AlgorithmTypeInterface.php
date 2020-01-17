<?php

/**
 * Created by PhpStorm.
 * User: dan
 * Date: 3/22/2018
 * Time: 5:27 PM
 */

namespace Interview\Solutions\Strings\Reverse\Interfaces\Types;

use Interview\Solutions\Strings\Reverse\Types\AlgorithmType;
use Interview\Solutions\Strings\Reverse\Types\StringType;

interface AlgorithmTypeInterface
{

    /**
     * @return AlgorithmType
     */
    public static function getInstance(): AlgorithmType;

    /**
     * @param StringType $algorithm
     * @return AlgorithmType
     */
    public function setAlgorithm(StringType $algorithm): AlgorithmType;

    /**
     * @return StringType
     */
    public function getAlgorithmName(): StringType;
}
