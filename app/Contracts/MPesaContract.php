<?php

namespace App\Contracts;

class MPesaContract
{
    protected $env;
    protected $consumer_secret;
    protected $consumer_key;
    protected $business_till;
    protected $business_paybill;

    public function __construct(string $env, string $consumer_secret, string $consumer_key, int $business_till, int $business_paybill)
    {
        $this->env = $env;
        $this->consumer_secret = $consumer_secret;
        $this->consumer_key = $consumer_key;
        $this->business_till = $business_till;
        $this->business_paybill = $business_paybill;
    }
}
