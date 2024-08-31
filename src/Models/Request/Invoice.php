<?php

namespace SingleWallet\Models\Request;

class Invoice {
    private $orderName;
    private $orderNumber;
    private $description;
    private $amount;
    private $currencyCode;
    private $customerEmail;
    private $ttl;
    private $payload;
    private $callbackUrl;
    private $redirectUrl;
    private $cancelUrl;
    private $language;

    /**
     * @return mixed
     */
    public function getOrderName(){
        return $this->orderName;
    }

    /**
     * @param mixed $orderName
     */
    public function setOrderName($orderName): Invoice {
        $this->orderName = $orderName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderNumber(){
        return $this->orderNumber;
    }

    /**
     * @param mixed $orderNumber
     */
    public function setOrderNumber($orderNumber): Invoice{
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription(){
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): Invoice{
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmount(){
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount): Invoice{
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomerEmail(){
        return $this->customerEmail;
    }

    /**
     * @param mixed $customerEmail
     */
    public function setCustomerEmail($customerEmail): Invoice{
        $this->customerEmail = $customerEmail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTtl(){
        return $this->ttl;
    }

    /**
     * @param mixed $ttl
     */
    public function setTtl($ttl): Invoice{
        $this->ttl = $ttl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayload(){
        return $this->payload;
    }

    /**
     * @param mixed $payload
     */
    public function setPayload($payload): Invoice {
        if(is_array($payload)){
            $payload = json_encode($payload);
        }

        $this->payload = $payload;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCallbackUrl(){
        return $this->callbackUrl;
    }

    /**
     * @param mixed $callbackUrl
     */
    public function setCallbackUrl($callbackUrl): Invoice{
        $this->callbackUrl = $callbackUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRedirectUrl(){
        return $this->redirectUrl;
    }

    /**
     * @param mixed $redirectUrl
     */
    public function setRedirectUrl($redirectUrl): Invoice{
        $this->redirectUrl = $redirectUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCancelUrl(){
        return $this->cancelUrl;
    }

    /**
     * @param mixed $cancelUrl
     */
    public function setCancelUrl($cancelUrl): Invoice{
        $this->cancelUrl = $cancelUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param mixed $language
     */
    public function setLanguage($language): Invoice
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrencyCode(){
        return $this->currencyCode;
    }

    /**
     * @param mixed $currencyCode
     */
    public function setCurrencyCode($currencyCode): Invoice {
        $this->currencyCode = $currencyCode;
        return $this;
    }
}