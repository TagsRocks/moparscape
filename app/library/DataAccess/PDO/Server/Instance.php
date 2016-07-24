<?php
namespace DataAccess\PDO\Server;

class Instance implements \Toplist\DataAccess\Server\Instance
{
    private $connection;

    public function __construct(\DataAccess\PDO\Connection $connection)
    {
        $this->connection = $connection;
    }

    public function fetch(int $id)
    {

    }

    public function save(\Toplist\ValueObject\Server $server)
    {

    }
}