<?php

declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190623192454 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE ' . $this->getTable('ignore_origin_rule') . ' (id INT AUTO_INCREMENT NOT NULL, config_id INT DEFAULT NULL, rule VARCHAR(255) NOT NULL, INDEX IDX_BB05DA1224DB0683 (config_id), PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE ' . $this->getTable('ignore_origin_rule') . ' ADD CONSTRAINT FK_BB05DA1224DB0683 FOREIGN KEY (config_id) REFERENCES ' . $this->getTable('config') . ' (id)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE ' . $this->getTable('ignore_origin_rule'));
    }
}
