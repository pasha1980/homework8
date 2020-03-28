<?php

//require_once 'vendor/autoload.php';                // Автозагрузчик PSR4

//require_once 'my_autoloader/autoload.php';           // Собственный автозагрузчик (упрощённый)

require_once 'src/Select.php';

$a = new \App\Select;

\App\Select::FROM('1');
