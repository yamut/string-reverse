<?php

namespace Interview\Solutions\Strings\Reverse\Interfaces\Types;

use Interview\Solutions\Strings\Reverse\Types\ArrayType;
use Interview\Solutions\Strings\Reverse\Types\StringType;

/**
 * Interface ArrayTypeInterface
 * @package Interview\Solutions\Strings\Reverse\Interfaces\Types
 */
interface ArrayTypeInterface
{

    /**
     * @return ArrayType
     */
    public static function getInstance(): ArrayType;

    /**
     * @param array $array
     * @return ArrayType
     */
    public function setValue(array $array): ArrayType;

    /**
     * @return array
     */
    public function getValue(): array;

    /**
     * @return StringType
     */
    public function toStringType(): StringType;
}
