<?php

//require_once 'vendor/autoload.php';                // Автозагрузчик PSR4

require_once 'my_autoloader/autoload.php';           // Собственный автозагрузчик (упрощённый)

/* Выводит SELECT * FROM <table> WHERE ...
 * 1 аргумент - *
 * 2 аргумент - <table>
 * Остальные аргументы - в зависимости от метода, который вызывается
 * ----------------------------------------------------------------------
 * Например:
 * Метод: findBetweenCreatedAt(*, <table>, $startDate, $endDate);
 * Вернёт - SELECT * FROM <table> WHERE created_at BETWEEN $start_date AND $end_date
 * ----------------------------------------------------------------------
 * !!! Работает только с названиями методов, приведённых в примере к домашке
 */

\App\SQL_select::findByEmailAndByStatus('Name' , "Students", '1' , '3');
