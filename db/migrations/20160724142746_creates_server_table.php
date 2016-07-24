<?php

use Phinx\Migration\AbstractMigration;

class CreatesServerTable extends AbstractMigration
{
    public function up()
    {
        $this->execute(
            "CREATE TABLE Server 
            (
              id INT(12) NOT NULL AUTO_INCREMENT,
              name VARCHAR(255) NOT NULL,
              description TEXT DEFAULT NULL,
              revision INT(4) NOT NULL DEFAULT 317,
              PRIMARY KEY(id)
            )"
        );
    }

    public function down()
    {
        $this->execute(
            "DROP TABLE Server"
        );
    }
}
