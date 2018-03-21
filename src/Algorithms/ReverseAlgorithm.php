<?php

namespace Interview\Solutions\Strings\Reverse\Algorithms;

use Interview\Solutions\Strings\Reverse\Interfaces\Algorithms\AlgorithmInterface;
use UnexpectedValueException;

/**
 * Class ReverseAlgorithm
 * @package Interview\Solutions\Strings\Reverse\Algorithms
 */
class ReverseAlgorithm implements AlgorithmInterface {
	/**
	 * @param array $input
	 * @return array
	 */
	public static function process( $input ): array {
		if ( !is_array( $input ) ) {
			throw new UnexpectedValueException( "Input is not of type array" );
		}

		return self::_process( $input );
	}

	/**
	 * @param array $input
	 * @return array
	 */
	public static function _process( array $input ): array {
		$output = [];
		while ( count( $input ) > 0 ) {
			$output[] = array_pop( $input );
		}

		return $output;
	}
}