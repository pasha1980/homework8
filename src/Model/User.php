<?php


namespace App\Model;


final class User extends Model
{
    private ?string $name;
    private ?string $email;
    public function __construct($id, $name, $email)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setEmail($email);
    }
    public static function createTable()
    {
        $pdo = new \PDO('mysql:host=mysql;dbname=study_php', 'root', '123');
        $sql = 'CREATE TABLE `study_php`.`users` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NULL , `email` VARCHAR(255) NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; ';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }
    public static function Table(): string
    {
        return 'users';
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
    public function Value(): string
    {
        return ' , "' . $this->getName() . '", "' . $this->getEmail() . '"';
    }
}