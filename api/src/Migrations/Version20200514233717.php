<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200514233717 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP SEQUENCE proprietor_status_id_seq CASCADE');
        $this->addSql('DROP TABLE proprietor_status');
        $this->addSql('ALTER TABLE application ADD _user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE application ADD offer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE application ADD status VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE application ADD CONSTRAINT FK_A45BDDC1D32632E8 FOREIGN KEY (_user_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE application ADD CONSTRAINT FK_A45BDDC153C674EE FOREIGN KEY (offer_id) REFERENCES offer (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_A45BDDC1D32632E8 ON application (_user_id)');
        $this->addSql('CREATE INDEX IDX_A45BDDC153C674EE ON application (offer_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE proprietor_status_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE proprietor_status (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE application DROP CONSTRAINT FK_A45BDDC1D32632E8');
        $this->addSql('ALTER TABLE application DROP CONSTRAINT FK_A45BDDC153C674EE');
        $this->addSql('DROP INDEX IDX_A45BDDC1D32632E8');
        $this->addSql('DROP INDEX IDX_A45BDDC153C674EE');
        $this->addSql('ALTER TABLE application DROP _user_id');
        $this->addSql('ALTER TABLE application DROP offer_id');
        $this->addSql('ALTER TABLE application DROP status');
    }
}
