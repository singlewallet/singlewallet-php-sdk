<?php

namespace SingleWallet\Exceptions;

use Exception;

class CreateInvoiceException extends Exception{
    public function __construct($message) {
        parent::__construct($message, 0, null);
    }
}