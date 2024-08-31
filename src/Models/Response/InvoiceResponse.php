<?php

namespace SingleWallet\Models\Response;

class InvoiceResponse {


    protected $id;
    protected $url;
    protected $orderName;
    protected $orderNumber;
    protected $description;
    protected $invoiceAmount;
    protected $paidAmount;
    protected $currencyCode;
    protected $fiatInvoiceAmount;
    protected $fiatPaidAmount;
    protected $exchangeRate;
    protected $customerEmail;
    protected $status;

    protected $exception;
    protected $payload;
    protected $callbackUrl;
    protected $redirectUrl;
    protected $cancelUrl;
    protected $language;
    protected $networkCode;
    protected $networkName;
    protected $address;
    protected $txid;
    protected $blockchainUrl;
    protected $createdAt;
    protected $expireAt;

    public function __construct($id,
                                $url,
                                $orderName,
                                $orderNumber,
                                $description,
                                $invoiceAmount,
                                $paidAmount,
                                $currencyCode,
                                $fiatInvoiceAmount,
                                $fiatPaidAmount,
                                $exchangeRate,
                                $customerEmail,
                                $status,
                                $exception,
                                $payload,
                                $callbackUrl,
                                $redirectUrl,
                                $cancelUrl,
                                $language,
                                $networkCode,
                                $networkName,
                                $address,
                                $txid,
                                $blockchainUrl,
                                $createdAt,
                                $expireAt){
        $this->expireAt = $expireAt;
        $this->createdAt = $createdAt;
        $this->blockchainUrl = $blockchainUrl;
        $this->txid = $txid;
        $this->address = $address;
        $this->networkName = $networkName;
        $this->networkCode = $networkCode;
        $this->language = $language;
        $this->cancelUrl = $cancelUrl;
        $this->redirectUrl = $redirectUrl;
        $this->callbackUrl = $callbackUrl;
        $this->payload = $payload;
        $this->exception = $exception;
        $this->status = $status;
        $this->customerEmail = $customerEmail;
        $this->paidAmount = $paidAmount;
        $this->currencyCode = $currencyCode;
        $this->fiatInvoiceAmount = $fiatInvoiceAmount;
        $this->fiatPaidAmount = $fiatPaidAmount;
        $this->exchangeRate = $exchangeRate;
        $this->invoiceAmount = $invoiceAmount;
        $this->description = $description;
        $this->orderNumber = $orderNumber;
        $this->orderName = $orderName;
        $this->url = $url;
        $this->id = $id;
    }

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

    public function getCurrencyCode(){
        return $this->currencyCode;
    }

    public function getFiatInvoiceAmount(){
        return $this->fiatInvoiceAmount;
    }

    public function getFiatPaidAmount(){
        return $this->fiatPaidAmount;
    }

    public function getExchangeRate(){
        return $this->exchangeRate;
    }
}