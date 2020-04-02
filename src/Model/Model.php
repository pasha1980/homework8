<?php


namespace App\Model;


abstract class Model
{
    abstract static function Table(): string;

    abstract static function ColumnNames(): string;

    abstract function Value(): string;

    protected $id;

    public static function select($id):self
    {
        $pdo = new \PDO('mysql:host=mysql;dbname=study_php', 'root', '123');

        $sql = 'SELECT * FROM ' . static::Table() . ' WHERE `id` = :id ;';

        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':id', $id);

        $stmt->execute();

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

//        return new static($result['id'], $result['name'], $result['email']);

        var_dump ($result);

        die;

    }

    public function update($column_name, $value)
    {
        $pdo = new \PDO('mysql:host=mysql;dbname=study_php', 'root', '123');

        $sql = 'UPDATE ' . static::Table() . " SET `$column_name` = ' $value ' WHERE id = :id;";

        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':id', $this->getId());

//        $stmt->bindValue(':val', $value);

//        $stmt->bindValue(':c_name', $column_name);

        $stmt->execute();
    }

    public function delete()                                                                                            // done
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

        $value = $this->getId() . $this->Value();

        $sql = 'INSERT INTO `' . static::Table() . '` ( ' . static::ColumnNames() . ' ) VALUES ( ' . $value . ' );';    //С параметрическим запросом :val отказывается работать

        $stmt = $pdo->prepare($sql);

//        $stmt->bindValue(':val', $value);

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