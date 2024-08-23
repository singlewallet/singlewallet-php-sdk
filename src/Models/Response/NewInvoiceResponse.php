<?php

namespace SingleWallet\Models\Response;

class NewInvoiceResponse {
    public function __construct(protected $id,
    protected $url,
    protected $orderName,
    protected $orderNumber,
    protected $description,
    protected $amount,
    protected $customerEmail,
    protected $payload,
    protected $callbackUrl,
    protected $redirectUrl,
    protected $cancelUrl,
    protected $language,
    protected $createdAt,
    protected $expireAt,
    protected $wallets){}

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
}