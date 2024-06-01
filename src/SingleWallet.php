<?php

namespace SingleWallet;

use SingleWallet\Exceptions\InvalidNetworkException;
use SingleWallet\Exceptions\TransactionNotFoundException;
use SingleWallet\Exceptions\WalletNotFoundException;
use SingleWallet\Exceptions\WithdrawException;
use SingleWallet\Models\AccountInformationResponse;
use SingleWallet\Models\CreateWalletResponse;
use SingleWallet\Models\NetworkResponse;
use SingleWallet\Models\TransactionResponse;
use SingleWallet\Models\WalletInformationResponse;
use SingleWallet\Models\WithdrawResponse;

class SingleWallet {
    protected $endpoint = 'https://api.singlewallet.cc/v1/';
    protected $request;

    public function __construct(string $apiKey, protected string $secretKey, $endpoint = null, $timeout = null){
        if(!is_null($endpoint)){
            $this->endpoint = $endpoint;
        }

        $this->request = new HttpRequest($this->endpoint, $apiKey, $timeout);
    }


    /**
     * Check whether the webhook payload is valid or not
     *
     * @param string $payload
     * @param string $signature
     * @return bool
     */
    public function isValidPayload(string $payload, string $signature) : bool {
        return hash_hmac('sha256', $payload, $this->secretKey) === $signature;
    }

    /**
     * get account basic information
     *
     * @return array
     */
    public function getAccountInfo() : AccountInformationResponse {
        $response = $this->request->get('info');
        $data = $response['body']->data;

        return new AccountInformationResponse($data->total_wallets,$data->accumulated_balance,$data->dust_balance,$data->balance);
    }


    /**
     * Check if wallet address is valid
     *
     * @param string $networkCode
     * @param string $address
     * @return bool
     */
    public function isValidAddress(string $networkCode, string $address) : bool {
        $response = $this->request->post('validate-address',[
            'network_code'=>$networkCode,
            'address'=>$address,
        ]);

        return $response['code'] === 200;
    }

    /**
     * Get list of all supported networks
     *
     * @return NetworkResponse[]
     */
    public function getNetworkList() : array {
        $response = $this->request->get('networks');

        return array_map(function($network){
            return new NetworkResponse($network->code, $network->name);
        },$response['body']->data->networks);
    }

    /**
     * Create new wallet address
     *
     * @param string $networkCode
     * @param string|null $label
     * @return CreateWalletResponse
     * @throws InvalidNetworkException
     */
    public function createWallet(string $networkCode, string $label=null) : CreateWalletResponse {
        $response = $this->request->post('wallet',[
            'network_code'=>$networkCode,
            'label'=>$label,
        ]);

        if($response['code'] == 201){
            $wallet = $response['body']->data->wallet;

            return new CreateWalletResponse($wallet->id, $wallet->label, $wallet->address, $wallet->network, $wallet->cost);
        }else{
            throw new InvalidNetworkException();
        }
    }

    /**
     * Get wallet information
     *
     * @param string $idOrAddress can be wallet id, or wallet address
     * @return WalletInformationResponse
     * @throws WalletNotFoundException
     */
    public function getWalletInfo(string $idOrAddress) : WalletInformationResponse {
        $response = $this->request->get("wallet/{$idOrAddress}");

        if($response['code'] == 200){
            $wallet = $response['body']->data->wallet;

            return new WalletInformationResponse(
                $wallet->id,
                $wallet->label,
                $wallet->address,
                $wallet->network,
                $wallet->accumulated_balance,
                $wallet->dust_balance,
                $wallet->deposits,
                $wallet->last_deposit,
            );

        }else{
            throw new WalletNotFoundException();
        }
    }

    /**
     * Create a withdraw request, which will be executed almost immediately.
     *
     * @param string $networkCode
     * @param string $address receiver wallet address
     * @param float $amount
     * @return WithdrawResponse
     * @throws WithdrawException
     */
    public function withdraw(string $networkCode, string $address, float $amount) : WithdrawResponse {
        $response = $this->request->post('withdraw',[
            'network_code'=>$networkCode,
            'address'=>$address,
            'amount'=>$amount,
        ]);

        if($response['code'] == 200){
            $transaction = $response['body']->data->transaction;
            return new WithdrawResponse($transaction->to, $transaction->amount, $transaction->fee, $transaction->txid);
        }else{
            throw new WithdrawException($response['body']['message']);
        }
    }

    /**
     * Get list with last 1000 deposits to the selected wallet
     *
     * @param string $idOrAddress can be wallet id, or wallet address
     * @return TransactionResponse[]
     * @throws WalletNotFoundException
     */
    public function walletDeposits(string $idOrAddress) : array {
        $response = $this->request->get("wallet/{$idOrAddress}/transactions");

        if($response['code'] == 200){
            return array_map(function($transaction){
                return new TransactionResponse(
                    $transaction->id,
                    $transaction->network,
                    $transaction->amount,
                    $transaction->txid,
                    $transaction->timestamp,
                    $transaction->from,
                    $transaction->to,
                    $transaction->type,
                    $transaction->status,
                    $transaction->is_dust,
                    $transaction->date,
                    $transaction->fee,
                );
            },$response['body']->data->transactions);
        }else{
            throw new WalletNotFoundException();
        }
    }

    /**
     * Get transaction details by id
     *
     * @param string $id uuid format
     * @return TransactionResponse
     * @throws TransactionNotFoundException
     */
    public function getTransaction(string $id) : TransactionResponse {
        $response = $this->request->get("transaction/{$id}");

        if($response['code'] == 200){
            $transaction = $response['body']->data->transaction;
            return new TransactionResponse(
                $transaction->id,
                $transaction->network,
                $transaction->amount,
                $transaction->txid,
                $transaction->timestamp,
                $transaction->from,
                $transaction->to,
                $transaction->type,
                $transaction->status,
                $transaction->is_dust,
                $transaction->date,
                $transaction->fee,
            );
        }else{
            throw new TransactionNotFoundException();
        }
    }

}