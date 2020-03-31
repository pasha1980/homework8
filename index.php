<?php

require_once 'my_autoloader/autoload.php';

$a = new \App\Model\User();

$a->create_table();

//$a->insert('id, name, email', '1, "timur", "timur@pasha.com"');

//$a->delete('id', 1);

//$a->update(10, 'name', "pasha");

//\App\Model\User::select(10);

