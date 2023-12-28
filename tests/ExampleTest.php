<?php

use PHPUnit\Framework\TestCase;
use Brunoinds\SunatDolar\Exchange;
use Brunoinds\SunatDolar\ExchangeDate\ExchangeDate;
use Brunoinds\SunatDolar\ExchangeTransaction\ExchangeTransaction;
use Brunoinds\SunatDolar\Enums\Currency;

class ExampleTest extends \PHPUnit\Framework\TestCase 
{
    /**
    * Just check if the YourClass has no syntax error
    *
    * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
    * any typo before you even use this library in a real project.
    *
    */
    public function testIsThereAnySyntaxError()
    {
        $var = new Exchange();
        $this->assertTrue(is_object($var));
        unset($var);
    }
    /**
    * Just check if the YourClass has no syntax error
    *
    * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
    * any typo before you even use this library in a real project.
    *
    */
    public function testExchange()
    {
        $var = new Exchange();
        $this->assertTrue(is_object($var));
        unset($var);
    }
    /**
    * Just check if the YourClass has no syntax error
    *
    * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
    * any typo before you even use this library in a real project.
    *
    */
    public function testExchangeDate()
    {
        $var = new ExchangeDate(new DateTime());
        $this->assertTrue(is_object($var));
        unset($var);
    }
    /**
    * Just check if the YourClass has no syntax error
    *
    * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
    * any typo before you even use this library in a real project.
    *
    */
    public function testExchangeTransaction()
    {
        $var = new ExchangeTransaction(new ExchangeDate(new DateTime()), Currency::PEN, 1.0);
        $this->assertTrue(is_object($var));
        unset($var);
    }

    public function testExchangeDateGetDollarBuyPrice()
    {
        $var = new ExchangeDate(DateTime::createFromFormat('Y-m-d', '2023-12-01'));
        $this->assertEquals(3.733, $var->getDollarBuyPrice());
        unset($var);
    }
}