<?php
namespace DataAccess\PDO;

class PDOGenerator
{
    public function generate($connectionString, $user, $pass)
    {
        return new \PDO(
            $connectionString, $user, $pass
        );
    }
}