## Requirements
```
php >=7.1
```

## Installation

```shell
composer install singlewallet/singlewallet-php-sdk
```

## Usage
```php
$singeWallet = new SingleWallet($apiKey,
                                $secretKey,
                                $endpoint = null /*default mainnet endpoint*/,
                                $timeout = null /*default is 5 seconds*/
                                );
```

[how to create api key?](https://singlewallet-api.readme.io/reference/create-api-key)

### create new wallet

```php
$wallet = $singeWallet->createWallet('tron', 'user #1534 wallet');
```

### create new invoice

```php
$invoiceRequest = (new Invoice())
    ->setOrderName('Order Name Here') // required
    ->setOrderNumber("#54321") // optional, default = null
    ->setDescription("Order Description") // optional, default = null
    ->setAmount(5) // required, min=3
    ->setCurrencyCode('GBP') // optional, default = USD
    ->setLanguage('en') // optional, default = en
    ->setTtl(15) // optional, default = 15, min = 15, max = 10080
    ->setCallbackUrl("https://website.com/callback") // optional, default is project callback url
    ->setCancelUrl("https://website.com/cancel-landing-page") // optional, default is project cancel url
    ->setRedirectUrl("https://website.com/success-landing-page") // optional, default is project redirect url
    ->setCustomerEmail("name@email.com") // optional
    ->setPayload("this can hold anything to be sent with webhook"); // optional

$invoice = $singlewallet->createInvoice($invoiceRequest);
```

### validate address

```php
if($singeWallet->isValidAddress('tron', 'TR7NHqjeKQxGTCi8q8ZY4pL8otSzgjLj6t')){
    // valid
}else{
    // invalid
}
```

### validate webhook payload

```php
$signature = $_SERVER['HTTP_sw-signature'];
$payload = file_get_contents('php://input');

if($singeWallet->isValidPayload($payload, $signature)){
    // valid
}else{
    // invalid
}
```


### other methods

```php
$singeWallet->createWallet(string $network_code, string $label = null) : CreateWalletResponse;
$singeWallet->isValidPayload(string $payload, string $signature) : bool;
$singeWallet->isValidAddress(string $network_code, string $address) : bool;
$singlewallet->getAccountInfo() : AccountInformationResponse; // Basic account information
$singlewallet->getNetworkList() : NetworkResponse[]; // List of all available networks
$singlewallet->getWalletInfo(string $walletId_or_walletAddress) : WalletInformationResponse; // Get wallet information
$singlewallet->withdraw(string $network_code, string $address, float $amount) : WithdrawResponse; // Withdraw from your balance
$singlewallet->walletDeposits(string $walletId_or_walletAddress) : TransactionResponse[]; // Get list with last 1000 deposits to the selected wallet
$singlewallet->getTransaction(string $id) : TransactionResponse; // Get transaction details by id

$singlewallet->createInvoice(Invoice $invoice) : NewInvoiceResponse;
$singlewallet->cancelInvoice(string $invoiceId) : boolean; // Cancel invoice
$singlewallet->getInvoice(string $invoiceId) : InvoiceResponse; // Get invoice details
$singlewallet->getFiatCurrencies() : FiatCurrenciesResponse[]; // Get fiat currencies list
$singlewallet->getLanguageList() : LanguageResponse[]; // Get supported languages list
```
