<?php

namespace SingleWallet\Models\Response;

class AccountInformationResponse {
    protected $totalWallets;
    protected $accumulatedBalance;
    protected $dustBalance;
    protected $balance;

    public function __construct(int $totalWallets,
                                float $accumulatedBalance,
                                float $dustBalance,
                                float $balance){
        $this->balance = $balance;
        $this->dustBalance = $dustBalance;
        $this->accumulatedBalance = $accumulatedBalance;
        $this->totalWallets = $totalWallets;
    }

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