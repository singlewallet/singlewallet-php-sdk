<?php

namespace SingleWallet\Models\Response;

class InvoiceResponse {


    public function __construct(protected $id,
                                protected $url,
                                protected $orderName,
                                protected $orderNumber,
                                protected $description,
                                protected $invoiceAmount,
                                protected $paidAmount,
                                protected $customerEmail,
                                protected $status,
                                protected $exception,
                                protected $payload,
                                protected $callbackUrl,
                                protected $redirectUrl,
                                protected $cancelUrl,
                                protected $language,
                                protected $networkCode,
                                protected $networkName,
                                protected $address,
                                protected $txid,
                                protected $blockchainUrl,
                                protected $createdAt,
                                protected $expireAt){}

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return mixed
     */
    public function getOrderName()
    {
        return $this->orderName;
    }

    /**
     * @return mixed
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getInvoiceAmount()
    {
        return $this->invoiceAmount;
    }

    /**
     * @return mixed
     */
    public function getPaidAmount()
    {
        return $this->paidAmount;
    }

    /**
     * @return mixed
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * @return mixed
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * @return mixed
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @return mixed
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     * @return mixed
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @return mixed
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @return mixed
     */
    public function getNetworkCode()
    {
        return $this->networkCode;
    }

    /**
     * @return mixed
     */
    public function getNetworkName()
    {
        return $this->networkName;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getTxid()
    {
        return $this->txid;
    }

    /**
     * @return mixed
     */
    public function getBlockchainUrl()
    {
        return $this->blockchainUrl;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return mixed
     */
    public function getExpireAt()
    {
        return $this->expireAt;
    }
}