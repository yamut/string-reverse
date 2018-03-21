<?php

namespace Interview\Solutions\Strings\Reverse\Interfaces\Types;

use Interview\Solutions\Strings\Reverse\Types\ArrayType;
use Interview\Solutions\Strings\Reverse\Types\StringType;

/**
 * Interface StringTypeInterface
 * @package Interview\Solutions\Strings\Reverse\Interfaces\Types
 */
interface StringTypeInterface {

	/**
	 * @return StringType
	 */
	public static function getInstance(): StringType;

	/**
	 * @param string $string
	 * @return StringType
	 */
	public function setValue( string $string ): StringType;

	/**
	 * @return string
	 */
	public function getValue(): string;

	/**
	 * @return ArrayType
	 */
	public function toArrayType(): ArrayType;

}