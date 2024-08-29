<?php

namespace SingleWallet\Models\Response;

class NetworkResponse {

    protected $code;
    protected $name;

    public function __construct(string $code, string $name){
        $this->name = $name;
        $this->code = $code;
    }

    public function getCode(): string{
        return $this->code;
    }

    public function getName(): string{
        return $this->name;
    }

}