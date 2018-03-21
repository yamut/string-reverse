<?php

namespace Interview\Solutions\Strings\Reverse\Interfaces\Parameters;

use Interview\Solutions\Strings\Reverse\Parameters\StringFactoryStringParameter;
use Interview\Solutions\Strings\Reverse\Types\StringType;

/**
 * Interface StringFactoryStringParameterInterface
 * @package Interview\Solutions\Strings\Reverse\Interfaces\Parameters
 */
interface StringFactoryStringParameterInterface {

	/**
	 * @return StringFactoryStringParameter
	 */
	public static function getInstance(): StringFactoryStringParameter;

	/**
	 * @param StringType $string
	 * @return StringFactoryStringParameter
	 */
	public function setValue( StringType $string ): StringFactoryStringParameter;

	/**
	 * @return StringType
	 */
	public function getValue(): StringType;

}