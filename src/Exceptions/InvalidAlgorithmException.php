<?php

namespace Interview\Solutions\Strings\Reverse\Exceptions;

use Exception;

class InvalidAlgorithmException extends Exception
{
    public function __construct(string $message, int $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return __CLASS__ . ": [" . $this->getCode() . "]: " . $this->getMessage() . PHP_EOL;
    }
}
