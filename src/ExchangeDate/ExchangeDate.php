<?php

namespace Brunoinds\SunatDolar\ExchangeDate;

use Brunoinds\SunatDolar\Converter\Converter;
use Brunoinds\SunatDolar\Enums\Currency;
use Brunoinds\SunatDolar\ExchangeTransaction\ExchangeTransaction;
use DateTime;

class ExchangeDate{
    public DateTime $date;

    public function __construct(DateTime $date){
        $this->date = $date;
    }

    public function getDollarSellPrice(): float{
        return Converter::getDailyDollarExchangeRate($this->date)->price->sell;
    }
    public function getDollarBuyPrice(): float{
        return Converter::getDailyDollarExchangeRate($this->date)->price->buy;
    }
    public function getSolesSellPrice(): float{
        return Converter::getDailySolesExchangeRate($this->date)->price->sell;
    }
    public function getSolesBuyPrice(): float{
        return Converter::getDailySolesExchangeRate($this->date)->price->buy;
    }

    public function convert(Currency $currency, float $amount): ExchangeTransaction{
        return new ExchangeTransaction($this, $currency, $amount);
    }
}