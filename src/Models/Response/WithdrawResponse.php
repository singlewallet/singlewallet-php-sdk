<?php

namespace SingleWallet\Models\Response;

class WithdrawResponse {

    protected $to;
    protected $amount;
    protected $fee;
    protected $txid;

    public function __construct(
        string $to,
        float $amount,
        float $fee,
        string $txid
    ){
        $this->txid = $txid;
        $this->fee = $fee;
        $this->amount = $amount;
        $this->to = $to;
    }

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