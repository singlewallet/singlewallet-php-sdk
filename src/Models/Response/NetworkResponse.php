<?php

namespace SingleWallet\Models\Response;

class NetworkResponse {

    public function __construct(protected string $code, protected string $name){
    }

    public function getCode(): string{
        return $this->code;
    }

    public function getName(): string{
        return $this->name;
    }

}