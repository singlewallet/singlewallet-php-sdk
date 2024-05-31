<?php

namespace SingleWallet\Models;

class AccountInformationResponse {
    public function __construct(protected int $totalWallets,
                                protected float $accumulatedBalance,
                                protected float $dustBalance,
                                protected float $balance){}

    public function getTotalWallets(): int{
        return $this->totalWallets;
    }

    public function getAccumulatedBalance(): float{
        return $this->accumulatedBalance;
    }

    public function getDustBalance(): float{
        return $this->dustBalance;
    }

    public function getBalance(): float{
        return $this->balance;
    }
}