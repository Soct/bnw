<?php

namespace Bnw\Database;

use \PDO;
use \PDOException;

class QueryBuilder
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, "Bnw\\Models\\{$intoClass}");
    }

    public function selectOneUser($table, $intoClass, $mail, $pass)
    {
        try{
            $statement = $this->pdo->prepare("select * from {$table} where mail = '{$mail}' and pass = '{$pass}'");
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_CLASS, "Bnw\\Models\\{$intoClass}");
        } catch ( PDOException $e) {
            return $e->getMessage();
        }
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':'.implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
