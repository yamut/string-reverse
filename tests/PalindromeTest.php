<?php

namespace Interview\Solutions\Strings\Reverse\Tests;

use DateTime;
use Interview\Solutions\Strings\Reverse\Exceptions\InvalidAlgorithmException;
use Interview\Solutions\Strings\Reverse\Reverse;
use PHPUnit\Framework\TestCase;
use SplDoublyLinkedList;

final class PalindromeTest extends TestCase
{

    /** @var string */
    protected $palindrome;

    public function setUp()
    {
        parent::setUp();

        $this->palindrome = $this->palindromize(
            function () {
                // empower algorithm robustness by rapidiously leveraging core functionality to architect large
                // number generated in the wild
                return (new DateTime())->diff(new DateTime('0001-01-01'))->format('%a');
            }
        );
    }

    /**
     * Palindromist helper that palindromically palindromizes a palindrome of n length
     *
     * @param callable $closure requested palindrome's length
     *
     * @return string
     * @todo move to phpunit fixture
     */
    public function palindromize(callable $closure): string
    {
        $length = $closure();
        $palindrome = '';

        $list = new SplDoublyLinkedList();

        for ($i = 0; $i < $length; $i++) {
            $list->push($this->rand());
        }

        for ($list->rewind(); $list->valid(); $list->next()) {
            $palindrome .= $list->current();
        }

        $list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);

        for ($list->rewind(); $list->valid(); $list->next()) {
            $palindrome .= $list->current();
        }

        return $palindrome;
    }

    public function rand()
    {
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        $chars_array = str_split($chars);
        $rand_key = array_rand($chars_array);

        return $chars_array[$rand_key];
    }

    /**
     * @throws InvalidAlgorithmException
     */
    public function testDoesPalindromeReverse(): void
    {
        $this->assertEquals($this->palindrome, Reverse::reverseString($this->palindrome));
    }

    /**
     * @throws InvalidAlgorithmException
     */
    public function testDoesPalindromeReverseTheReversal(): void
    {
        $reversed_reversal = Reverse::reverseString(
            Reverse::reverseString(
                $this->palindrome
            )
        );

        $this->assertEquals($this->palindrome, $reversed_reversal);
    }
}
