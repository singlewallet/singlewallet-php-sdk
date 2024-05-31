<?php

namespace SingleWallet\Exceptions;

use Throwable;
use Exception;

class InvalidNetworkException extends Exception{
    public function __construct() {
        parent::__construct('invalid network', 0, null);
    }
}