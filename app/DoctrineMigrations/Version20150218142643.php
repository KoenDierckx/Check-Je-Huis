<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20150218142643 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql("UPDATE default_energy SET electricityHeatPump = 6500 WHERE size = 'small'");
        $this->addSql("UPDATE default_energy SET electricityHeatPump = 7000 WHERE size = 'medium'");
        $this->addSql("UPDATE default_energy SET electricityHeatPump = 9000 WHERE size = 'large'");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
