<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181018172112 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE mission (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, mission_title VARCHAR(255) NOT NULL, mission_text VARCHAR(255) NOT NULL)');
        $this->addSql('DROP INDEX IDX_D79F6B11213C1059');
        $this->addSql('DROP INDEX UNIQ_D79F6B11158E0B66');
        $this->addSql('CREATE TEMPORARY TABLE __temp__participant AS SELECT id, target_id, party_id, name, email_address, uid, is_alive, number_of_kills FROM participant');
        $this->addSql('DROP TABLE participant');
        $this->addSql('CREATE TABLE participant (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, target_id INTEGER DEFAULT NULL, party_id INTEGER DEFAULT NULL, mission_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, email_address VARCHAR(255) NOT NULL COLLATE BINARY, uid VARCHAR(255) NOT NULL COLLATE BINARY, is_alive BOOLEAN NOT NULL, number_of_kills INTEGER NOT NULL, CONSTRAINT FK_D79F6B11158E0B66 FOREIGN KEY (target_id) REFERENCES participant (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_D79F6B11213C1059 FOREIGN KEY (party_id) REFERENCES killer_party (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_D79F6B11BE6CAE90 FOREIGN KEY (mission_id) REFERENCES mission (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO participant (id, target_id, party_id, name, email_address, uid, is_alive, number_of_kills) SELECT id, target_id, party_id, name, email_address, uid, is_alive, number_of_kills FROM __temp__participant');
        $this->addSql('DROP TABLE __temp__participant');
        $this->addSql('CREATE INDEX IDX_D79F6B11213C1059 ON participant (party_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D79F6B11158E0B66 ON participant (target_id)');
        $this->addSql('CREATE INDEX IDX_D79F6B11BE6CAE90 ON participant (mission_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE mission');
        $this->addSql('DROP INDEX UNIQ_D79F6B11158E0B66');
        $this->addSql('DROP INDEX IDX_D79F6B11213C1059');
        $this->addSql('DROP INDEX IDX_D79F6B11BE6CAE90');
        $this->addSql('CREATE TEMPORARY TABLE __temp__participant AS SELECT id, target_id, party_id, name, email_address, uid, is_alive, number_of_kills FROM participant');
        $this->addSql('DROP TABLE participant');
        $this->addSql('CREATE TABLE participant (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, target_id INTEGER DEFAULT NULL, party_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL, email_address VARCHAR(255) NOT NULL, uid VARCHAR(255) NOT NULL, is_alive BOOLEAN NOT NULL, number_of_kills INTEGER NOT NULL, mission_title VARCHAR(255) DEFAULT NULL COLLATE BINARY, mission_text VARCHAR(255) DEFAULT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO participant (id, target_id, party_id, name, email_address, uid, is_alive, number_of_kills) SELECT id, target_id, party_id, name, email_address, uid, is_alive, number_of_kills FROM __temp__participant');
        $this->addSql('DROP TABLE __temp__participant');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D79F6B11158E0B66 ON participant (target_id)');
        $this->addSql('CREATE INDEX IDX_D79F6B11213C1059 ON participant (party_id)');
    }
}
