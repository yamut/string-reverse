<?php

namespace Interview\Solutions\Strings\Reverse\Types;

use Interview\Solutions\Strings\Reverse\Interfaces\Types\StringTypeInterface;

/**
 * Class StringType
 * @package Interview\Solutions\Strings\Reverse\Types
 */
class StringType implements StringTypeInterface {
	/**
	 * @var string
	 */
	private $string;

	/**
	 * @return StringType
	 */
	public static function getInstance(): StringType {
		return new StringType();
	}

	/**
	 * @param string $string
	 * @return StringType
	 */
	public function setValue( string $string ): StringType {
		$this->string = $string;

		return $this;
	}

	/**
	 * @return ArrayType
	 */
	public function toArrayType(): ArrayType {
		return ArrayType::getInstance()->setValue( $this->_toArrayType( $this->getValue() ) );
	}

	/**
	 * @param $string
	 * @return array
	 */
	private function _toArrayType( $string ): array {
		return str_split( $string );
	}

	/**
	 * @return string
	 */
	public function getValue(): string {
		return $this->string;
	}


}