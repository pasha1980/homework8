<?php


namespace App\Model;


final class User extends Model
{
    public function create_table()
    {
        $pdo = new \PDO('mysql:host=mysql;dbname=study_php', 'root', '123');

        $sql = 'CREATE TABLE users (id int(11), name varchar (255), email varchar (255));';

        $stmt = $pdo->prepare($sql);

        $stmt->execute();
    }

    static function Table(): string
    {
        return 'users';
    }
}