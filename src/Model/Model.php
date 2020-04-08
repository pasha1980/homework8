<?php


namespace App\Model;


abstract class Model
{
    abstract static function table(): string;
    abstract function value(): string;
    protected $id;
    public static function select($id):self
    {
        $pdo = new \PDO('mysql:host=mysql;dbname=study_php', 'root', '123');
        $sql = 'SELECT * FROM ' . static::table() . ' WHERE `id` = :id ;';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        var_dump ($result);
        die;
    }
    public function update($column_name, $value)
    {
        $pdo = new \PDO('mysql:host=mysql;dbname=study_php', 'root', '123');
        $sql = 'UPDATE ' . static::table() . " SET `$column_name` = ' $value ' WHERE id = :id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $this->getId());
        $stmt->execute();
    }
    public function delete()
    {
        $pdo = new \PDO('mysql:host=mysql;dbname=study_php', 'root', '123');
        $sql = 'DELETE FROM ' . static::Table() . " WHERE `id` = :val";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':val', $this->getId());
        $stmt->execute();
    }
    public function insert()
    {
        $pdo = new \PDO('mysql:host=mysql;dbname=study_php', 'root', '123');
        $value = $this->getId() . $this->value();
        $sql = 'INSERT INTO `' . static::table() . '` VALUES ( ' . $value . ' );';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * @param int $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
}