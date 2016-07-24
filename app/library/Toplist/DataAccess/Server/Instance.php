<?php
namespace Toplist\DataAccess\Server;

interface Instance
{
    public function fetch(int $id);

    public function save(\Toplist\ValueObject\Server $server);
}