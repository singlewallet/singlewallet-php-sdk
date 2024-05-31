<?php

namespace SingleWallet\Exceptions;

use Throwable;
use Exception;

class WalletNotFoundException extends Exception{
    public function __construct() {
        parent::__construct('wallet not found', 0, null);
    }
}