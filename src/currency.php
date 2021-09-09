<?php

declare(strict_types=1);

namespace App;

class Currency
{
    private string $isoCode;

    public function __construct(string $isoCode)
    {
        $this->setIsoCode($isoCode);
    }

    private function setIsoCode(string $isoCode): void
    {
        if (!ctype_upper($isoCode) || iconv_strlen($isoCode) !== 3) {
            exit("Ошибка! <br> Введите код валюты в формате ISO4217! <br>
            Код валюты должен содержать три буквы латинского алфавита, в верхнем регистре! <br>
            Например: UAH, USD, EUR, RUB...");
        }

        $this->isoCode = $isoCode;
    }

    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    public function equals(Currency $currency): bool
    {
        return $this->getIsoCode() == $currency->getIsoCode();
    }
}
