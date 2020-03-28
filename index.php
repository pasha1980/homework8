<?php

//require_once 'vendor/autoload.php';                // Автозагрузчик PSR4

require_once 'my_autoloader/autoload.php';           // Собственный автозагрузчик (упрощённый)


$id = 1;

/* Выводит SELECT * FROM <table> WHERE id = :id
 * 1 аргумент - *
 * 2 аргумент - <table>
 * 3 аргумент - id
 * ----------------------------------------------------------------------
 * Работает только с названиями методов, приведённых в примере к домашке
 */

\App\SQL_select::findByEmailAndByStatus('Name' , "Students", '1' , '3');
