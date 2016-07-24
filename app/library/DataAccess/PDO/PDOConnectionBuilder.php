<?php
namespace DataAccess\PDO;

class PDOConnectionBuilder implements ConnectionBuilder
{
    private $generator;
    private $host;
    private $name;
    private $user;
    private $pass;

    public function __construct(
        PDOGenerator $generator,
        $host,
        $name,
        $user,
        $pass
    ) {
        $this->generator = $generator;
        $this->host = $host;
        $this->name = $name;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function createConnection()
    {
        return new PDOConnection(
            $this->generator->generate(
                $this->generateConnectionString(),
                $this->user, $this->pass
            ),
            new PDOStatementBuilder()
        );
    }

    private function generateConnectionString()
    {
        return "mysql:host=" . $this->host . ";dbname=" . $this->name;
    }
}