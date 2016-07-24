<?php
namespace Toplist\ValueObject;

class Server
{
    private $id;
    private $name;
    private $description;
    private $revision;

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setRevision(int $revision)
    {
        $this->revision = $revision;
    }

    public function getRevision(): int
    {
        return $this->revision;
    }
}