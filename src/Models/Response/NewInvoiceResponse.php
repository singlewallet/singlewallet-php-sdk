<?php

namespace SingleWallet\Models\Response;

class NewInvoiceResponse {
    protected $id;
    protected $url;
    protected $orderName;
    protected $orderNumber;
    protected $description;
    protected $amount;
    protected $currencyCode;
    protected $fiatAmount;
    protected $exchangeRate;
    protected $customerEmail;
    protected $payload;
    protected $callbackUrl;
    protected $redirectUrl;
    protected $cancelUrl;
    protected $language;
    protected $createdAt;
    protected $expireAt;
    protected $wallets;

    public function __construct($id,
                                $url,
                                $orderName,
                                $orderNumber,
                                $description,
                                $amount,
                                $currencyCode,
                                $fiatAmount,
                                $exchangeRate,
                                $customerEmail,
                                $payload,
                                $callbackUrl,
                                $redirectUrl,
                                $cancelUrl,
                                $language,
                                $createdAt,
                                $expireAt,
                                $wallets){
        $this->wallets = $wallets;
        $this->expireAt = $expireAt;
        $this->createdAt = $createdAt;
        $this->language = $language;
        $this->cancelUrl = $cancelUrl;
        $this->redirectUrl = $redirectUrl;
        $this->callbackUrl = $callbackUrl;
        $this->payload = $payload;
        $this->customerEmail = $customerEmail;
        $this->amount = $amount;
        $this->currencyCode = $currencyCode;
        $this->fiatAmount = $fiatAmount;
        $this->exchangeRate = $exchangeRate;
        $this->description = $description;
        $this->orderNumber = $orderNumber;
        $this->orderName = $orderName;
        $this->url = $url;
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function getUrl(): string{
        return $this->url;
    }

    public function getOrderName(): string{
        return $this->orderName;
    }

    public function getOrderNumber(): string{
        return $this->orderNumber;
    }

    public function getDescription(): string{
        return $this->description;
    }

    public function getAmount(): string{
        return $this->amount;
    }

    public function getCustomerEmail(): string{
        return $this->customerEmail;
    }

    public function getPayload(): string {
        return $this->payload;
    }

    public function getCallbackUrl(): string{
        return $this->callbackUrl;
    }

    public function getRedirectUrl(): string{
        return $this->redirectUrl;
    }

    public function getCancelUrl(): string{
        return $this->cancelUrl;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getCreatedAt(): string{
        return $this->createdAt;
    }

    public function getExpireAt(): string{
        return $this->expireAt;
    }

    public function getWallets(): array{
        return $this->wallets;
    }

    public function getCurrencyCode(){
        return $this->currencyCode;
    }

    public function getFiatAmount(){
        return $this->fiatAmount;
    }

    public function getExchangeRate(){
        return $this->exchangeRate;
    }
}