<?php

namespace SingleWallet\Models\Response;

class WalletInformationResponse {

    protected $id;
    protected $label;
    protected $address;
    protected $network;
    protected $accumulatedBalance;
    protected $dustBalance;
    protected $deposits;
    protected $lastDeposit;

    public function __construct(
        string $id,
        string $label,
        string $address,
        string $network,
        float $accumulatedBalance,
        float $dustBalance,
        int $deposits,
        string $lastDeposit
    ){
        $this->lastDeposit = $lastDeposit;
        $this->deposits = $deposits;
        $this->dustBalance = $dustBalance;
        $this->accumulatedBalance = $accumulatedBalance;
        $this->network = $network;
        $this->address = $address;
        $this->label = $label;
        $this->id = $id;
    }


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