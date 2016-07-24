<?php
namespace Web\Module\Index\Controller;

class Index extends \Web\Service\Connection
{
    private $serverCollection;

    public function __construct()
    {
        $serverBuilder = new \Web\Builder\Server($this->getConnection());
        $this->serverCollection = $serverBuilder->buildCollection();
    }

    public function getIndex()
    {
        $servers = $this->serverCollection->fetch();
    }
}