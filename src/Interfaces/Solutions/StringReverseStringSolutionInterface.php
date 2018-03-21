<?php

namespace Interview\Solutions\Strings\Reverse\Interfaces\Solutions;

use Interview\Solutions\Strings\Reverse\Returners\StringReturner;
use Interview\Solutions\Strings\Reverse\Types\StringType;

/**
 * Interface StringReverseStringSolutionInterface
 * @package Interview\Solutions\Strings\Reverse\Interfaces\Solutions
 */
interface StringReverseStringSolutionInterface {

	/**
	 * @return void
	 */
	public function checkSupportedAlgorithms(): void;

	/**
	 * @param StringType $input
	 * @return StringReturner
	 */
	public function runReverseStringSolution( StringType $input ): StringReturner;

}