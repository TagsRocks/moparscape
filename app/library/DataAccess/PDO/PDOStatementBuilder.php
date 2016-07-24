<?php
namespace DataAccess\PDO;

class PDOStatementBuilder
{
    public function create(\PDOStatement $statement)
    {
        return new PDOStatement($statement);
    }
}