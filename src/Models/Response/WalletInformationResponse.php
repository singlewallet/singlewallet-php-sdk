<?php

namespace SingleWallet\Models\Response;

class WalletInformationResponse {

    public function __construct(
        protected string $id,
        protected string $label,
        protected string $address,
        protected string $network,
        protected float $accumulatedBalance,
        protected float $dustBalance,
        protected int $deposits,
        protected string $lastDeposit,
    ){}


    public function getId(): string{
        return $this->id;
    }

    public function getLabel(): string{
        return $this->label;
    }

    public function getAddress(): string{
        return $this->address;
    }

    public function getNetwork(): string{
        return $this->network;
    }

    public function getAccumulatedBalance(): float{
        return $this->accumulatedBalance;
    }

    public function getDustBalance(): float{
        return $this->dustBalance;
    }

    public function getDeposits(): int{
        return $this->deposits;
    }

    public function getLastDeposit(): string{
        return $this->lastDeposit;
    }

}