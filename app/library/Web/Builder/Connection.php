<?php
namespace Web\Builder;

class Connection
{
    private $config;

    public function __construct(\DataAccess\PDO\Config $config)
    {
        $this->config = $config;
    }

    public function build()
    {
        $database = new \DataAccess\PDO\PDOConnectionBuilder(
            new \DataAccess\PDO\PDOGenerator(),
            $this->config->getHost(),
            $this->config->getName(),
            $this->config->getUser(),
            $this->config->getPass()
        );

        return $database->createConnection();
    }
}