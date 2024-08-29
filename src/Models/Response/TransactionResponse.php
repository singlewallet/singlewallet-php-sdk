<?php

namespace SingleWallet\Models\Response;

class TransactionResponse {

    protected $id;
    protected $network;
    protected $amount;
    protected $txid;
    protected $timestamp;
    protected $from;
    protected $to;
    protected $type;
    protected $status;
    protected $isDust;
    protected $date;
    protected $fee;

    public function __construct(
        string $id,
        string $network,
        float $amount,
        string $txid,
        int $timestamp,
        string $from,
        string $to,
        string $type,
        string $status,
        bool $isDust,
        string $date,
        float $fee
    ){
        $this->fee = $fee;
        $this->date = $date;
        $this->isDust = $isDust;
        $this->status = $status;
        $this->type = $type;
        $this->to = $to;
        $this->from = $from;
        $this->timestamp = $timestamp;
        $this->txid = $txid;
        $this->amount = $amount;
        $this->network = $network;
        $this->id = $id;
    }

    public function getId(): string{
        return $this->id;
    }

    public function getNetwork(): string{
        return $this->network;
    }

    public function getAmount(): float{
        return $this->amount;
    }

    public function getTxid(): string{
        return $this->txid;
    }

    public function getTimestamp(): int{
        return $this->timestamp;
    }

    public function getFrom(): string{
        return $this->from;
    }

    public function getTo(): string{
        return $this->to;
    }

    public function getType(): string{
        return $this->type;
    }

    public function getStatus(): string{
        return $this->status;
    }

    public function isDust(): bool{
        return $this->isDust;
    }

    public function getDate(): string{
        return $this->date;
    }

    public function getFee(): float{
        return $this->fee;
    }
}