<?php
namespace DataAccess\PDO;

class PDOConnection implements Connection
{
    private $connection;
    private $builder;

    public function __construct(
        \PDO $connection,
        PDOStatementBuilder $builder
    ) {
        $this->connection = $connection;
        $this->builder = $builder;
    }
    
    public function execute($query, array $values): PDOStatement
    {
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        $statement = $this->connection->prepare($query);
        foreach($values as $key => &$value)
        {
            if(is_int($value)) {
                $statement->bindParam($key, $value, \PDO::PARAM_INT);
            } else {
                $statement->bindParam($key, $value);
            }
        }

        $statement->execute();
        return $this->builder->create($statement);
    }
}