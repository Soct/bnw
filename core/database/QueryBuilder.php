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

    public function selectOneById($table, $intoClass, $id)
    {
        try{
            $statement = $this->pdo->prepare("select * from {$table} where idanimal = '{$id}'");
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

    public function selectUserRdv($id){
        try {
            $statement = $this->pdo->prepare("select distinct(animal.nom), rdv.date 
                                                    from rdv, animal 
                                                    where rdv.idanimal = animal.idanimal
                                                    and rdv.idanimal in (select idanimal 
                                                                        from animal 
                                                                        where iduser = '{$id}')");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_CLASS, "Bnw\\Models\\Rdv");
        }catch ( PDOException $e) {
            return $e->getMessage();
        }
    }

    public function selectAllTarif() {
        $statement = $this->pdo->prepare("select * from tarifs");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, "Bnw\\Models\\Tarif");
    }
}
