<?php
namespace Web\Service;

class Connection
{
    public function getConnection()
    {
        $iniBuilder = new \Web\Builder\INI();
        $configBuilder = new \Web\Builder\Config();
        $connectionBuilder = new \Web\Builder\Connection(
            $configBuilder->buildConnection(
                $iniBuilder->buildConnection()
            )
        );

        return $connectionBuilder->build();
    }
}