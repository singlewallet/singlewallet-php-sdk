<?php

namespace SingleWallet\Models\Response;

class FiatCurrenciesResponse {

    protected $code;
    protected $name;
    protected $rate;

    public function __construct(string $code, string $name, string $rate){
        $this->name = $name;
        $this->code = $code;
        $this->rate = $rate;
    }

    public function getCode(): string{
        return $this->code;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getRate(): string{
        return $this->rate;
    }
}