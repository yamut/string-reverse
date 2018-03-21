<?php

namespace Interview\Solutions\Strings\Reverse\Solutions;

use Interview\Solutions\Strings\Reverse\Algorithms\ReverseAlgorithm;
use Interview\Solutions\Strings\Reverse\Constants;
use Interview\Solutions\Strings\Reverse\Interfaces\Solutions\StringReverseStringSolutionInterface;
use Interview\Solutions\Strings\Reverse\Returners\StringReturner;
use Interview\Solutions\Strings\Reverse\Types\ArrayType;
use Interview\Solutions\Strings\Reverse\Types\StringType;

/**
 * Class StringReverseStringSolution
 * @package Interview\Solutions\Strings\Reverse\Solutions
 */
class StringReverseStringSolution implements StringReverseStringSolutionInterface {

	/**
	 * @var string
	 */
	private $algorithm;

	/**
	 * @param StringType $input
	 * @return StringReturner
	 */
	public function runReverseStringSolution( StringType $input ): StringReturner {
		$this->checkSupportedAlgorithms();
		if ( method_exists( $this, $this->algorithm ) ) {
			return StringReturner::getInstance()->setValue( $this->{$this->algorithm}( $input ) );
		} else {
			return StringReturner::getInstance()->setValue( StringType::getInstance()
				->setValue( '' ) );
		}
	}

	/**
	 * @return void
	 */
	public function checkSupportedAlgorithms(): void {
		$this->algorithm = Constants::ALGORITHM;
	}

	/**
	 * @param StringType $string
	 * @return StringType
	 */
	protected function ReverseAlgorithm( StringType $string ): StringType {
		return ArrayType::getInstance()
			->setValue( ReverseAlgorithm::process( StringType::getInstance()
				->setValue( $string->getValue() )
				->toArrayType()
				->getValue() ) )
			->toStringType();
	}
}