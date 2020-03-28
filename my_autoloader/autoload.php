<?php

// Необходимо:
// "App\Currency" заменить на "src/Currency.php"

class myAutoloader
{
    public function register()
    {
        spl_autoload_register(
            function ($class) {
                $path = str_replace('\\', '/', str_replace('App', 'src', $class)) . '.php';
                require_once $path;
            }
        );
    }
}

$a = new myAutoloader();
$a->register();
