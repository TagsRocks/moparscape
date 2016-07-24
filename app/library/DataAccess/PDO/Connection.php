<?php
namespace DataAccess\PDO;

interface Connection
{
    public function execute($query, array $values);
}