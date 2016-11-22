<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20150216130539 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // execute all queries from the data file

        $data = file_get_contents(__DIR__ . '/../Resources/db/002/data.sql');

        $lines = explode(PHP_EOL, $data);
        foreach ($lines as $l) {
            $l = trim($l);
            if (empty($l)) continue;

            $this->addSql($l);
        }
    }

    public function down(Schema $schema)
    {
        // data changes, not reverting not needed
    }
}
