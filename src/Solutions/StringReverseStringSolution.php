<?php

namespace Interview\Solutions\Strings\Reverse\Solutions;

use Interview\Solutions\Strings\Reverse\Constants;
use Interview\Solutions\Strings\Reverse\Factories\AlgorithmFactory;
use Interview\Solutions\Strings\Reverse\Interfaces\Solutions\StringReverseStringSolutionInterface;
use Interview\Solutions\Strings\Reverse\Returners\StringReturner;
use Interview\Solutions\Strings\Reverse\Types\AlgorithmType;
use Interview\Solutions\Strings\Reverse\Types\ArrayType;
use Interview\Solutions\Strings\Reverse\Types\StringType;

/**
 * Class StringReverseStringSolution
 * @package Interview\Solutions\Strings\Reverse\Solutions
 */
class StringReverseStringSolution implements StringReverseStringSolutionInterface {

	/**
	 * @var AlgorithmFactory
	 */
	private $algorithm;

	/**
	 * @param StringType $input
	 * @param null $algorithm
	 * @return StringReturner|null
	 * @throws \Interview\Solutions\Strings\Reverse\Exceptions\InvalidAlgorithmException
	 */
	public function runReverseStringSolution( StringType $input, $algorithm = null
	): ?StringReturner {

		$this->algorithm =
			AlgorithmFactory::getInstance()->setAlgorithm( AlgorithmType::getInstance()
				->setAlgorithm( StringType::getInstance()->setValue( $algorithm === null
					? Constants::DEFAULT_ALGORITHM : $algorithm ) ) );

		return StringReturner::getInstance()->setValue( ArrayType::getInstance()
			->setValue( $this->algorithm->runProcess( $input ) )
			->toStringType() );
	}
}