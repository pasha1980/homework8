<?php


namespace App;

use http\Exception\InvalidArgumentException;

class Currency
{
    private $isoCode;


    public function __construct($isoCode)
    {
        $this->setIsoCode($isoCode);
    }

    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    public function setIsoCode(string $isoCode): void
    {
        $currencies = array( 'EUR', 'USD', 'AED', 'AFN', 'ALL', 'AMD', 'ANG', 'AOA', 'ARS', 'AUD', 'AWG', 'AZN', 'BAM', 'BBD', 'BDT', 'BGN', 'BHD', 'BIF', 'BMD', 'BND', 'BOB', 'BOV', 'BRL', 'BSD', 'BTN', 'BWP', 'BYN', 'BZD',
            'CAD', 'CDF', 'CHE', 'CHF', 'CHW', 'CLF', 'CLP', 'CNY', 'COP', 'COU', 'CRC', 'CUC', 'CUP', 'CVE', 'CZK', 'DJF', 'DKK', 'DOP', 'DZD', 'EGP', 'ERN', 'ETB', 'FJD', 'FKP', 'GBP', 'GEL', 'GHS', 'GIP',
            'GMD', 'GNF', 'GTQ', 'GYD', 'HKD', 'HNL', 'HRK', 'HTG', 'HUF', 'IDR', 'ILS', 'INR', 'IQD', 'IRR', 'ISK', 'JMD', 'JOD', 'JPY', 'KES', 'KGS', 'KHR', 'KMF', 'KPW', 'KRW', 'NOK', 'NZD', 'PLN', 'RON',
            'RUB', 'SAR', 'SEK', 'UAH', 'UGX', 'UYU', 'XOF', 'XCD',
        );

        if (!in_array($isoCode, $currencies)){
            throw new InvalidArgumentException();
        }

        $this->isoCode = $isoCode;
    }

    public function equals(Currency $currency): bool
    {
        return $this->getIsoCode() === $currency->getIsoCode();
    }

}

