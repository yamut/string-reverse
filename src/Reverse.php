<?php

namespace Interview\Solutions\Strings\Reverse;

use Interview\Solutions\Strings\Reverse\Factories\StringFactory;
use Interview\Solutions\Strings\Reverse\Solutions\StringReverseStringSolution;
use Interview\Solutions\Strings\Reverse\Types\StringType;

/**
 * Class Reverse
 * @package Interview\Solutions\Strings\Reverse
 */
class Reverse {
	/**
	 * @param string $string
	 * @return string
	 * @throws Exceptions\InvalidAlgorithmException
	 */
	public static function reverseString( string $string ) {
		$solution = new StringReverseStringSolution();

		return $solution->runReverseStringSolution( StringFactory::getInstance()
			->setString( StringType::getInstance()->setValue( $string ) )
			->getString() )->getValue()->getValue();
	}
}