<?php
namespace Web\Builder;

class INI
{
    const CONFIG_DIRECTORY = "app/config/";

    public function buildConnection()
    {
        return parse_ini_file(
            self::CONFIG_DIRECTORY . "connection.ini"
        );
    }
}