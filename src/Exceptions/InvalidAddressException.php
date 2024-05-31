<?php

namespace SingleWallet\Exceptions;

use Throwable;
use Exception;

class InvalidAddressException extends Exception{
    public function __construct() {
        parent::__construct('invalid address', 0, null);
    }
}