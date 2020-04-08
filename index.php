<?php
require_once 'vendor/autoload.php';
\App\Model\User::createTable();
$a = new \App\Model\User(1, 'pasha', 'pasha@gmail.com');
//$a->insert();
//$a->delete();
//$a->update('name', 'igor');
//\App\Model\User::select(1);