<?php
declare(strict_types=1);

namespace App;

class Money
{
    private int|float $amount;
    private Currency $currency;

    public function __construct(int|float $amount, Currency $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);

    }

    private function setAmount(int|float $amount): void
    {
        $this->amount = $amount;
    }

    public function getAmount(): int|float
    {
        return $this->amount;
    }

    private function setCurrency(Currency $currency): void
    {
        $this->currency = $currency;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function equals(Money $money): bool
    {
        //  return ($this->getAmount() == $money->getAmount() && $this->getCurrency()->getIsoCode() == $money->getCurrency()->getIsoCode());
        return ($this->getAmount() == $money->getAmount() && $this->getCurrency()->equals($money->getCurrency()));
    }

    public function add(Money $money): void       //self
    {
        if (!$this->getCurrency()->equals($money->getCurrency())) {
            exit('Ошибка! Валюты различны!');
        }
        $this->setAmount($this->getAmount() + $money->getAmount());
        //return  clone $this;
    }
}

