<?php


namespace App;


use http\Exception\InvalidArgumentException;

class Money
{
    private $amount;

    private $currency;

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCurrency($currency): void
    {
        $this->currency = $currency;
    }

    public function __construct($amount, $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }

    public function equals(Money $money): bool
    {
        return $this->amount === $money->getAmount()
            && $this->currency === $money->getCurrency();
    }

    public function add(Money $money): void
    {
        $this->setAmount($this->getAmount() + $money->getAmount());
    }
}