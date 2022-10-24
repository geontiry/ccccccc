<?php

namespace App\Services;

use App\Contracts\MPesaContract;

class MPesaService extends MPesaContract
{
    private $base_url = 'https://laravel.com/docs/8.x';

    public function setParams(string $base_url)
    {
        $this -> base_url = $base_url;
    }

    public function auth()
    {
        //
    }

    public function express()
    {
        return [
            $this->env,
            $this->consumer_secret,
            $this->consumer_key,
            $this->business_till,
            $this->business_paybill,
            $this->base_url
        ];
    }

    public function customerToBusiness()
    {
    }

    public function businessToCustomer()
    {
        //
    }

    public function transactionStatus(int $amount = null)
    {

        //return $entries;
    }

    public function accountBalance(int $amount = null)
    {
        //return $entries;
    }

    public function reversal(int $amount = null)
    {
        //return $entries;
    }
}
