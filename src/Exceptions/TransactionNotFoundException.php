<?php

namespace SingleWallet\Exceptions;

use Exception;

class TransactionNotFoundException extends Exception{
    public function __construct() {
        parent::__construct('transaction not found', 0, null);
    }
}