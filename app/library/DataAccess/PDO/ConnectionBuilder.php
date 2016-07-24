<?php
namespace DataAccess\PDO;

interface ConnectionBuilder
{
    public function createConnection();
}