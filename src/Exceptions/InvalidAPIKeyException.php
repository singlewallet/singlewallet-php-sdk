<?php

namespace SingleWallet\Exceptions;

use Exception;
use Throwable;

class InvalidAPIKeyException extends Exception{
    public function __construct() {
        parent::__construct('invalid api key', 0, null);
    }
}