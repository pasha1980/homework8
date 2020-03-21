<?php 

$PDO = new PDO('mysql:host=mysql;dbname=docker_test', 'root', '123');

class Currency {
	private $isoCode;
}

Class Money {
	private $amount;
	private $currency;
}