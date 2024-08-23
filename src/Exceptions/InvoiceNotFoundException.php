<?php

namespace SingleWallet\Exceptions;

use Exception;

class InvoiceNotFoundException extends Exception{
    public function __construct() {
        parent::__construct('invoice not found', 0, null);
    }
}