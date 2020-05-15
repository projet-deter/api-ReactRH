<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200514235955 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE application DROP first_name');
        $this->addSql('ALTER TABLE application DROP last_name');
        $this->addSql('ALTER TABLE application DROP sexe');
        $this->addSql('ALTER TABLE application DROP picture');
        $this->addSql('ALTER TABLE application DROP email');
        $this->addSql('ALTER TABLE application DROP age');
        $this->addSql('ALTER TABLE application DROP adress');
        $this->addSql('ALTER TABLE application DROP motivation');
        $this->addSql('ALTER TABLE application DROP prez_sala');
        $this->addSql('ALTER TABLE application DROP cv');
        $this->addSql('ALTER TABLE users ADD first_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD last_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD sexe VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD picture BYTEA DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD email VARCHAR(60) DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD age INT DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD adress VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD motivation TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD prez_sala VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD cv VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD applications VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE users ALTER username DROP NOT NULL');
        $this->addSql('ALTER TABLE users ALTER password DROP NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE users DROP first_name');
        $this->addSql('ALTER TABLE users DROP last_name');
        $this->addSql('ALTER TABLE users DROP sexe');
        $this->addSql('ALTER TABLE users DROP picture');
        $this->addSql('ALTER TABLE users DROP email');
        $this->addSql('ALTER TABLE users DROP age');
        $this->addSql('ALTER TABLE users DROP adress');
        $this->addSql('ALTER TABLE users DROP motivation');
        $this->addSql('ALTER TABLE users DROP prez_sala');
        $this->addSql('ALTER TABLE users DROP cv');
        $this->addSql('ALTER TABLE users DROP applications');
        $this->addSql('ALTER TABLE users ALTER username SET NOT NULL');
        $this->addSql('ALTER TABLE users ALTER password SET NOT NULL');
        $this->addSql('ALTER TABLE application ADD first_name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE application ADD last_name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE application ADD sexe VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE application ADD picture BYTEA NOT NULL');
        $this->addSql('ALTER TABLE application ADD email VARCHAR(60) NOT NULL');
        $this->addSql('ALTER TABLE application ADD age INT NOT NULL');
        $this->addSql('ALTER TABLE application ADD adress VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE application ADD motivation TEXT NOT NULL');
        $this->addSql('ALTER TABLE application ADD prez_sala VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE application ADD cv VARCHAR(255) NOT NULL');
    }
}
