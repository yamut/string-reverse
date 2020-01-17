<?php

namespace Interview\Solutions\Strings\Reverse\Interfaces\Returners;

use Interview\Solutions\Strings\Reverse\Returners\StringReturner;
use Interview\Solutions\Strings\Reverse\Types\StringType;

/**
 * Interface StringReturnerInterface
 * @package Interview\Solutions\Strings\Reverse\Interfaces\Returners
 */
interface StringReturnerInterface
{

    /**
     * @return StringReturner
     */
    public static function getInstance(): StringReturner;

    /**
     * @param StringType $string
     * @return StringReturner
     */
    public function setValue(StringType $string): StringReturner;

    /**
     * @return StringType
     */
    public function getValue(): StringType;
}
