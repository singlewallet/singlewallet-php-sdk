<?php

namespace SingleWallet\Exceptions;

use Throwable;
use Exception;

class WithdrawException extends Exception{
    public function __construct($message) {
        parent::__construct($message, 0, null);
    }
}