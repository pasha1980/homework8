<?php

require_once 'my_autoloader/autoload.php';

$a = new \App\Model\User(1, 'pasha', 'pasha@timur.com');

\App\Model\User::create_table();

//$a->insert();

//$a->delete();

//$a->update('name', "igor");

//\App\Model\User::select(1);

