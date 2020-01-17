<?php

namespace Interview\Solutions\Strings\Reverse\Algorithms;

use UnexpectedValueException;

/**
 * Class ReverseAlgorithm
 * @package Interview\Solutions\Strings\Reverse\Algorithms
 */
class ReverseAlgorithm extends Algorithm
{

    /**
     * @param $input
     * @return array
     */
    public static function process($input): array
    {
        if (!is_array($input)) {
            throw new UnexpectedValueException("Input is not of type array");
        }

        return self::run($input);
    }

    /**
     * @param array $input
     * @return array
     */
    public static function run(array $input): array
    {
        $output = [];
        while (count($input) > 0) {
            $output[] = array_pop($input);
        }

        return $output;
    }
}
