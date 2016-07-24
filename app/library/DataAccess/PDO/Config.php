<?php
namespace DataAccess\PDO;

class Config
{
    private $host;
    private $user;
    private $pass;
    private $name;

    public function setHost(string $host)
    {
        $this->host = $host;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function setUser(string $user)
    {
        $this->user = $user;
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function setPass(string $pass)
    {
        $this->pass = $pass;
    }

    public function getPass(): string
    {
        return $this->pass;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}