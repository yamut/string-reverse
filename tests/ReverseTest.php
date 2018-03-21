<?php

use Interview\Solutions\Strings\Reverse\Reverse;
use PHPUnit\Framework\TestCase;

final class ReverseTest extends TestCase {

	public function testDoesStringReverse(): void {
		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
		$chars_array = str_split( $chars );
		$length = 10;
		$string = "";
		for ( $i = 0; $i < $length; $i ++ ) {
			$string .= array_rand( $chars_array );
		}
		$this->assertEquals( strrev( $string ), Reverse::reverseString( $string ) );
	}
}
