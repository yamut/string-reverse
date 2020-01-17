<?php

namespace Interview\Solutions\Strings\Reverse\Types;

use Interview\Solutions\Strings\Reverse\Interfaces\Types\ArrayTypeInterface;

/**
 * Class ArrayType
 * @package Interview\Solutions\Strings\Reverse\Types
 */
class ArrayType implements ArrayTypeInterface
{
    /**
     * @var array
     */
    private $array;

    /**
     * @return ArrayType
     */
    public static function getInstance(): ArrayType
    {
        return new ArrayType();
    }

    /**
     * @param array $array
     * @return ArrayType
     */
    public function setValue(array $array): ArrayType
    {
        $this->array = $array;

        return $this;
    }

    /**
     * @return StringType
     */
    public function toStringType(): StringType
    {
        return StringType::getInstance()->setValue($this->arrayToStringType($this->getValue()));
    }

    /**
     * @param $array
     * @return string
     */
    private function arrayToStringType($array)
    {
        $return = "";
        if (is_array($array) && !empty($array)) {
            foreach ($array as $val) {
                if (is_array($val)) {
                    $return .= $this->arrayToStringType($val);
                } else {
                    $return .= $val;
                }
            }
        }

        return $return;
    }

    /**
     * @return array
     */
    public function getValue(): array
    {
        return $this->array;
    }
}
