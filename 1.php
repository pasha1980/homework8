<?php

require_once('src/Currency.php');
require_once('src/Money.php');

$currency1 = new \App\Currency('USD');
$currency2 = new \App\Currency('USD');

$result1 = $currency1->equals($currency2);

var_dump($result1);

$money1 = new \App\Money(153, 'USD');
$money2 = new \App\Money(323, 'USD');

$money1->add($money2);

var_dump($money1);
