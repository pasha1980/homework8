<?php


namespace App;


class Select
{
    public static function __callStatic($name, $arguments)
    {
        echo "SELECT $name " . implode(',', $arguments);
    }
}
