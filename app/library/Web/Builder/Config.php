<?php
namespace Web\Builder;

class Config
{
    public function buildConnection($settings)
    {
        $config = new \DataAccess\PDO\Config();
        $config->setHost($settings['host']);
        $config->setName($settings['name']);
        $config->setUser($settings['user']);
        $config->setPass($settings['pass']);

        return $config;
    }
}