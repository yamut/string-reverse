<?php

namespace Interview\Solutions\Strings\Reverse\Tests;

use Interview\Solutions\Strings\Reverse\Exceptions\InvalidAlgorithmException;
use Interview\Solutions\Strings\Reverse\Reverse;
use PHPUnit\Framework\TestCase;

class PerformanceTest extends TestCase
{

    /**
     * Number of times to run the length test
     */
    private const NUM_LENGTH_TESTS = 1;

    /**
     * Number of times to run the high usage test
     */
    private const VOLUME_ITERATIONS = 10000;

    /**
     * Testing local or not
     * If set to true the statistics file will be written
     */
    private const LOCAL = false;

    /**
     * @var resource file handle
     */
    public $fh;

    /**
     * PerformanceTest constructor.
     * @param null|string $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        if (self::LOCAL) {
            ini_set('max_execution_time', -1);
            ini_set('memory_limit', '2048M');
            error_reporting(E_ALL);
            ini_set('log_errors', true);
            ini_set('error_log', './errors.log');
        }
        parent::__construct($name, $data, $dataName);
    }

    /**
     * @throws InvalidAlgorithmException
     */
    public function testLengthPerformance(): void
    {
        if (self::LOCAL) {
            $this->getFileHandle('test-length-performance.txt');
        }
        $this->printSomewhere("BEGIN testLengthPerformance" . PHP_EOL);
        $times = [];
        $counter = 0;
        $memory = 0;
        while ($counter < self::NUM_LENGTH_TESTS) {
            $start = microtime(true);
            $string = $this->lengthBasedSetup();
            $reversed = Reverse::reverseString($string);
            if (strrev($string) == $reversed) {
                $this->assertTrue(true);
            } else {
                $this->assertTrue(false);
            }
            $this->assertEquals(strrev($string), $reversed);
            $end = microtime(true);
            unset($string, $reversed);
            $times[] = $end - $start;
            $mem = memory_get_usage(true);
            if ($mem > $memory) {
                $memory = $mem;
            }
            $counter++;
            $this->printSomewhere("Time: " . ($end - $start) . PHP_EOL);
            flush();
        }
        $average = 0;
        foreach ($times as $time) {
            $average += $time;
        }
        $average = $average / count($times);
        $this->printSomewhere("Average time: " . $average . PHP_EOL);
        $this->printSomewhere("Max memory usage: " . ($memory / 1024 / 1024) . "MB" . PHP_EOL);
        $this->printSomewhere("END testLengthPerformance" . PHP_EOL . PHP_EOL);
    }

    /**
     * Create the file handle
     */
    public function getFileHandle($filename = "./statistics.txt")
    {
        $this->fh = fopen($filename, 'w');
    }

    /**
     * @param $message
     */
    public function printSomewhere($message): void
    {
        if (self::LOCAL) {
            $this->writeLine($message);
        }
    }

    /**
     * @param $message
     */
    public function writeLine($message)
    {
        fwrite($this->fh, $message);
    }

    /**
     * @param int $length
     * @return string
     */
    public function lengthBasedSetup($length = 5000000): string
    {
        // Seems int max might be too much. At 1 byte per character that comes out to I think 8
        // exabytes bare - I don't think travis will let me do that, and I don't have that much ram
        // Decreasing until my laptop can run it
        $return = "";
        for ($i = 0; $i <= $length; $i++) {
            // Easily the most enterprise way to generate a random character
            $return .= chr(bindec(openssl_random_pseudo_bytes(1)));
        }

        return $return;
    }

    /**
     * @throws InvalidAlgorithmException
     */
    public function testHighVolume(): void
    {
        if (self::LOCAL) {
            $this->getFileHandle('test-volume-performance.txt');
        }
        $this->printSomewhere("BEGIN testHighVolume" . PHP_EOL);
        $counter = 0;
        $times = [];
        $memory = 0;
        while ($counter < self::VOLUME_ITERATIONS) {
            $start = microtime(true);
            $string = $this->lengthBasedSetup(mt_rand(2, 1024));
            $reversed = Reverse::reverseString($string);
            if (strrev($string) == $reversed) {
                $this->assertTrue(true);
            } else {
                $this->assertTrue(false);
            }
            //$this->assertEquals( strrev( $string ), $reversed );
            $end = microtime(true);
            $times[] = $end - $start;
            unset($string, $reversed);
            $mem = memory_get_usage(true);
            if ($mem > $memory) {
                $memory = $mem;
            }
            $counter++;
            $this->printSomewhere("Time: " . ($end - $start) . PHP_EOL);
            flush();
        }
        $average = 0;
        foreach ($times as $time) {
            $average += $time;
        }
        $average = $average / count($times);
        $this->printSomewhere("Average time: $average" . PHP_EOL);
        $this->printSomewhere("Max memory usage: " . ($memory / 1024 / 1024) . "MB" . PHP_EOL);
        $this->printSomewhere("END testHighVolume" . PHP_EOL . PHP_EOL);
    }
}
