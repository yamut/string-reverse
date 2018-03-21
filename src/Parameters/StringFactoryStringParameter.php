<?php

namespace Interview\Solutions\Strings\Reverse\Parameters;

use Interview\Solutions\Strings\Reverse\Interfaces\Parameters\StringFactoryStringParameterInterface;
use Interview\Solutions\Strings\Reverse\Types\StringType;

/**
 * Class StringFactoryStringParameter
 * @package Interview\Solutions\Strings\Reverse\Parameters
 */
class StringFactoryStringParameter implements StringFactoryStringParameterInterface {
	/**
	 * @var StringType
	 */
	private $string;

	/**
	 * @return StringFactoryStringParameter
	 */
	public static function getInstance(): StringFactoryStringParameter {
		return new StringFactoryStringParameter();
	}

	/**
	 * @return StringType
	 */
	public function getValue(): StringType {
		return $this->string;
	}

	/**
	 * @param StringType $string
	 * @returns StringFactoryStringParameter
	 */
	public function setValue( StringType $string ): StringFactoryStringParameter {
		$this->string = $string;

		return $this;
	}

}