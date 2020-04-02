<?php


namespace App\Model;


final class User extends Model
{
    protected ?string $name;

    protected ?string $email;


    public static function create_table()
    {
        $pdo = new \PDO('mysql:host=mysql;dbname=study_php', 'root', '123');

        $sql = 'CREATE TABLE `users` (id int(11), name varchar (255), email varchar (255));';

        $stmt = $pdo->prepare($sql);

        $stmt->execute();
    }

    public static function Table(): string
    {
        return 'users';
    }

    public static function ColumnNames(): string
    {
        return 'id, name, email';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function __construct($id, $name, $email)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setEmail($email);
    }

    public function Value(): string
    {
        return ' , "' . $this->getName() . '", "' . $this->getEmail() . '"';
    }
}