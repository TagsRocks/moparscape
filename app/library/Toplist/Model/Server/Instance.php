<?php
namespace Toplist\Model\Server;

class Instance
{
    private $dao;

    public function __construct(\Toplist\DataAccess\Server\Instance $dao)
    {
        $this->dao = $dao;
    }

    public function fetch(int $id)
    {
        return $this->dao->fetch($id);
    }

    public function save(\Toplist\ValueObject\Server $server)
    {
        $this->dao->save($server);
    }
}