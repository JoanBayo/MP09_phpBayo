<?php

namespace Framework\Database;

use PDO;

class Database
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table){

        $statement = $this ->pdo->prepare("SELECT * FROM $table;");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

    function insert($table, $parameters){
        $sql = sprintf(
            'insert into %d (%s) values ($s)',
            $table,
            implode(',', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
    }
}