<?php 

$PDO = new PDO('mysql:host=mysql;dbname=docker_test', 'root', '123');

class Currency {
	
	private $isoCode;                      //Приватное свойство
	
	public function __construct($a) {      //Конструктор класса
		$a = numfmt_create( 'ru_RU', NumberFormatter::CURRENCY );
		$this->setB($a);
	}
	
	public function getB() {               //Гэттер
		return $this->isoCode;
	}
	
	public function setB() {              //Сеттер
		$this->isoCode = $a;
	}

}
