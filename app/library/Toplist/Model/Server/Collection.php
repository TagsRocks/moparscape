<?php
namespace Toplist\Model\Server;

class Collection
{
    private $dao;

    public function __construct(\Toplist\DataAccess\Server\Collection $dao)
    {
        $this->dao = $dao;
    }

    public function fetch()
    {
        return $this->dao->fetch();
    }
}