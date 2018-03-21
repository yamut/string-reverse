<?php

namespace Interview\Solutions\Strings\Reverse\Returners;

use Interview\Solutions\Strings\Reverse\Interfaces\Returners\StringReturnerInterface;
use Interview\Solutions\Strings\Reverse\Types\StringType;

/**
 * Class StringReturner
 * @package Interview\Solutions\Strings\Reverse\Returners
 */
class StringReturner implements StringReturnerInterface {
	/**
	 * @var StringType
	 */
	private $string;

	/**
	 * @return StringReturner
	 */
	public static function getInstance(): StringReturner {
		return new StringReturner();
	}

	/**
	 * @param StringType $string
	 * @return StringReturner
	 */
	public function setValue( StringType $string ): StringReturner {
		$this->string = $string;

		return $this;
	}

	/**
	 * @return StringType
	 */
	public function getValue(): StringType {
		return $this->string;
	}

}