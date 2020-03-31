<?php


namespace App\Model;


abstract class Model
{
    abstract static function Table(): string;

    public static function select($id):self
    {
        $pdo = new \PDO('mysql:host=mysql;dbname=study_php', 'root', '123');

        $sql = 'SELECT * FROM ' . static::Table() . ' WHERE id = :id' . ';';

        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':id', $id);

        $stmt->execute();

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

//        return new static($result['id'], $result['name'], $result['email']);

        var_dump ($result);

        die;

    }

    public function update($id, $column_name, $value)
    {
        $pdo = new \PDO('mysql:host=mysql;dbname=study_php', 'root', '123');

        $sql = 'UPDATE ' . static::Table() . " SET $column_name = '$value' WHERE id = :id;";

        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':id', $id);

//        $stmt->bindValue(':val', $value);

//        $stmt->bindValue(':c_name', $column_name);

        $stmt->execute();
    }

    public function delete($column_name, $value)
    {
        $pdo = new \PDO('mysql:host=mysql;dbname=study_php', 'root', '123');

        $sql = 'DELETE FROM ' . static::Table() . " WHERE $column_name = :val";

        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':val', $value);

        $stmt->execute();
    }

    public function insert($column_name, $value)
    {
        $pdo = new \PDO('mysql:host=mysql;dbname=study_php', 'root', '123');

        $sql = 'INSERT INTO ' . static::Table() . "($column_name) VALUES ($value);";

        $stmt = $pdo->prepare($sql);

//        $stmt->bindValue(':val', $value);

        $stmt->execute();
    }
}