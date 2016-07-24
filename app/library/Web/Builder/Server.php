<?php
namespace Web\Builder;

class Server
{
    private $connection;

    public function __construct(\DataAccess\PDO\Connection $connection)
    {
        $this->connection = $connection;
    }

    public function buildInstance()
    {
        return new \Toplist\Model\Server\Instance(
            new \DataAccess\PDO\Server\Instance(
                $this->connection
            )
        );
    }

    public function buildCollection()
    {
        return new \Toplist\Model\Server\Collection(
            new \DataAccess\PDO\Server\Collection(
                $this->connection
            )
        );
    }
}