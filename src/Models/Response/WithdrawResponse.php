<?php

namespace SingleWallet\Models\Response;

class WithdrawResponse {

    public function __construct(
        protected string $to,
        protected float $amount,
        protected float $fee,
        protected string $txid,
    ){}

    public function getTo(): string{
        return $this->to;
    }

    public function getAmount(): float{
        return $this->amount;
    }

    public function getFee(): float{
        return $this->fee;
    }

    public function getTxid(): string{
        return $this->txid;
    }

}