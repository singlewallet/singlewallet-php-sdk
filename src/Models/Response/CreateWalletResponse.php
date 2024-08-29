<?php

namespace SingleWallet\Models\Response;

class CreateWalletResponse {
    protected $id;
    protected $label;
    protected $address;
    protected $network;
    protected $cost;

    public function __construct(
        string $id,
        string $label,
        string $address,
        string $network,
        float $cost){
        $this->cost = $cost;
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

    public function getCost(): float{
        return $this->cost;
    }
}