<?php

/**
 * Created by PhpStorm.
 * User: dan
 * Date: 3/22/2018
 * Time: 5:25 PM
 */

namespace Interview\Solutions\Strings\Reverse\Interfaces\Factories;

use Interview\Solutions\Strings\Reverse\Factories\AlgorithmFactory;
use Interview\Solutions\Strings\Reverse\Types\AlgorithmType;

interface AlgorithmFactoryInterface
{

    /**
     * @return AlgorithmFactory
     */
    public static function getInstance(): AlgorithmFactory;

    /**
     * @param AlgorithmType $algorithm
     * @return AlgorithmFactory
     */
    public function setAlgorithm(AlgorithmType $algorithm = null): AlgorithmFactory;

    /**
     * @return AlgorithmType
     */
    public function getAlgorithm(): AlgorithmType;
}
