<?php
namespace DataAccess\PDO\Server;

class Collection implements \Toplist\DataAccess\Server\Collection
{
    const SERVERS_PER_PAGE = 50;
    const FETCH_QUERY = "SELECT * FROM Server LIMIT :offset, :limit";

    private $connection;
    private $offset = 0;

    public function __construct(\DataAccess\PDO\Connection $connection)
    {
        $this->connection = $connection;
    }

    public function setOffset(int $offset)
    {
        $this->offset = $offset;
    }

    public function fetch()
    {
        $binds = [
            "limit" => self::SERVERS_PER_PAGE,
            "offset" => $this->offset
        ];

        return $this->mapResponseToVOs(
            $this->connection->execute(self::FETCH_QUERY, $binds)->fetchAll()
        );
    }

    private function mapResponseToVOs(array $response)
    {
        return array_map(function($server) {
            $vo = new \Toplist\ValueObject\Server();
            $vo->setId($server['id']);
            $vo->setName($server['name']);
            $vo->setDescription($server['description']);
            $vo->setRevision($server['revision']);

            return $vo;
        }, $response);
    }
}
