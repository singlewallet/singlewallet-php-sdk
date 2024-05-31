## installation

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
$singlewallet->getAccountInfo() : AccountInformationResponse; // Basic account information
$singlewallet->getNetworkList() : NetworkResponse[]; // List of all available networks
$singlewallet->getWalletInfo(string $walletId_or_walletAddress) : WalletInformationResponse; // Get wallet information
$singlewallet->withdraw(string $network_code, string $address, float $amount) : WithdrawResponse; // Withdraw from your balance
$singlewallet->walletDeposits(string $walletId_or_walletAddress) : TransactionResponse[]; // Get list with last 1000 deposits to the selected wallet
$singlewallet->getTransaction(string $id) : TransactionResponse; // Get transaction details by id
```
