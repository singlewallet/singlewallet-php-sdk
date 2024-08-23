<?php

namespace SingleWallet\Models\Response;

class TransactionResponse {

    public function __construct(
        protected string $id,
        protected string $network,
        protected float $amount,
        protected string $txid,
        protected int $timestamp,
        protected string $from,
        protected string $to,
        protected string $type,
        protected string $status,
        protected bool $isDust,
        protected string $date,
        protected float $fee,
    ){}

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