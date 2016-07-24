<?php
namespace Toplist\DataAccess\Server;

interface Collection extends \Toplist\DataAccess\Pagination
{
    public function fetch();
}