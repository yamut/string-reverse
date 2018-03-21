<?php

namespace Interview\Solutions\Strings\Reverse\Interfaces\Factories;


use Interview\Solutions\Strings\Reverse\Factories\StringFactory;
use Interview\Solutions\Strings\Reverse\Types\StringType;

/**
 * Interface StringFactoryInterface
 * @package Interview\Solutions\Strings\Reverse\Interfaces\Factories
 */
interface StringFactoryInterface {

	/**
	 * @return StringFactory
	 */
	public static function getInstance(): StringFactory;

	/**
	 * @param StringType $string
	 * @return mixed
	 */
	public function setString( StringType $string );

	/**
	 * @return StringType
	 */
	public function getString(): StringType;

}