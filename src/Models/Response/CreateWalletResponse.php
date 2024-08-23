<?php

namespace SingleWallet\Models\Response;

class CreateWalletResponse {
    public function __construct(
        protected string $id,
        protected string $label,
        protected string $address,
        protected string $network,
        protected float $cost){}

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

    public function getCost(): float{
        return $this->cost;
    }
}