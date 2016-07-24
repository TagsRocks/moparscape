<?php
namespace DataAccess\PDO;

class PDOStatement
{
    private $statement;

    public function __construct(
        \PDOStatement $statement
    ) {
        $this->statement = $statement;
    }

    public function fetchAll()
    {
        return $this->statement->fetchAll();
    }

    public function fetchColumn()
    {
        return $this->statement->fetchColumn();
    }
}