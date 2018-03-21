<?php

namespace Interview\Solutions\Strings\Reverse\Factories;

use Interview\Solutions\Strings\Reverse\Interfaces\Factories\StringFactoryInterface;
use Interview\Solutions\Strings\Reverse\Types\StringType;

/**
 * Class StringFactory
 * @package Interview\Solutions\Strings\Reverse\Factories
 */
class StringFactory implements StringFactoryInterface {
	/**
	 * @var StringType
	 */
	private $string;

	/**
	 * @return StringFactory
	 */
	public static function getInstance(): StringFactory {
		return new StringFactory();
	}

	/**
	 * @return StringType
	 */
	public function getString(): StringType {
		return $this->string;
	}

	/**
	 * @param StringType $string
	 * @return StringFactory
	 */
	public function setString( StringType $string ): StringFactory {
		$this->string = $string;

		return $this;
	}

}