<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181024160617 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE game_list (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE game_list_jeudesociete (game_list_id INTEGER NOT NULL, jeudesociete_id INTEGER NOT NULL, PRIMARY KEY(game_list_id, jeudesociete_id))');
        $this->addSql('CREATE INDEX IDX_FB040287A86C69A4 ON game_list_jeudesociete (game_list_id)');
        $this->addSql('CREATE INDEX IDX_FB04028748ED65B9 ON game_list_jeudesociete (jeudesociete_id)');
        $this->addSql('CREATE TABLE jeudesociete (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, min_player INTEGER NOT NULL, max_player INTEGER NOT NULL, shop_link VARCHAR(800) NOT NULL, owned BOOLEAN NOT NULL, interest INTEGER NOT NULL, available BOOLEAN DEFAULT NULL)');
        $this->addSql('DROP INDEX UNIQ_29935C985DFCD4B8');
        $this->addSql('CREATE TEMPORARY TABLE __temp__killer_party AS SELECT id, winner_id, starting_date, name, uid, is_over FROM killer_party');
        $this->addSql('DROP TABLE killer_party');
        $this->addSql('CREATE TABLE killer_party (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, winner_id INTEGER DEFAULT NULL, starting_date DATETIME NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, uid VARCHAR(255) NOT NULL COLLATE BINARY, is_over BOOLEAN DEFAULT NULL, CONSTRAINT FK_29935C985DFCD4B8 FOREIGN KEY (winner_id) REFERENCES participant (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO killer_party (id, winner_id, starting_date, name, uid, is_over) SELECT id, winner_id, starting_date, name, uid, is_over FROM __temp__killer_party');
        $this->addSql('DROP TABLE __temp__killer_party');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_29935C985DFCD4B8 ON killer_party (winner_id)');
        $this->addSql('DROP INDEX IDX_D79F6B11BE6CAE90');
        $this->addSql('DROP INDEX UNIQ_D79F6B11158E0B66');
        $this->addSql('DROP INDEX IDX_D79F6B11213C1059');
        $this->addSql('CREATE TEMPORARY TABLE __temp__participant AS SELECT id, target_id, party_id, mission_id, name, email_address, uid, is_alive, number_of_kills FROM participant');
        $this->addSql('DROP TABLE participant');
        $this->addSql('CREATE TABLE participant (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, target_id INTEGER DEFAULT NULL, party_id INTEGER DEFAULT NULL, mission_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, email_address VARCHAR(255) NOT NULL COLLATE BINARY, uid VARCHAR(255) NOT NULL COLLATE BINARY, is_alive BOOLEAN NOT NULL, number_of_kills INTEGER NOT NULL, CONSTRAINT FK_D79F6B11158E0B66 FOREIGN KEY (target_id) REFERENCES participant (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_D79F6B11213C1059 FOREIGN KEY (party_id) REFERENCES killer_party (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_D79F6B11BE6CAE90 FOREIGN KEY (mission_id) REFERENCES mission (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO participant (id, target_id, party_id, mission_id, name, email_address, uid, is_alive, number_of_kills) SELECT id, target_id, party_id, mission_id, name, email_address, uid, is_alive, number_of_kills FROM __temp__participant');
        $this->addSql('DROP TABLE __temp__participant');
        $this->addSql('CREATE INDEX IDX_D79F6B11BE6CAE90 ON participant (mission_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D79F6B11158E0B66 ON participant (target_id)');
        $this->addSql('CREATE INDEX IDX_D79F6B11213C1059 ON participant (party_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE game_list');
        $this->addSql('DROP TABLE game_list_jeudesociete');
        $this->addSql('DROP TABLE jeudesociete');
        $this->addSql('DROP INDEX UNIQ_29935C985DFCD4B8');
        $this->addSql('CREATE TEMPORARY TABLE __temp__killer_party AS SELECT id, winner_id, starting_date, name, uid, is_over FROM killer_party');
        $this->addSql('DROP TABLE killer_party');
        $this->addSql('CREATE TABLE killer_party (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, winner_id INTEGER DEFAULT NULL, starting_date DATETIME NOT NULL, name VARCHAR(255) NOT NULL, uid VARCHAR(255) NOT NULL, is_over BOOLEAN DEFAULT NULL)');
        $this->addSql('INSERT INTO killer_party (id, winner_id, starting_date, name, uid, is_over) SELECT id, winner_id, starting_date, name, uid, is_over FROM __temp__killer_party');
        $this->addSql('DROP TABLE __temp__killer_party');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_29935C985DFCD4B8 ON killer_party (winner_id)');
        $this->addSql('DROP INDEX UNIQ_D79F6B11158E0B66');
        $this->addSql('DROP INDEX IDX_D79F6B11213C1059');
        $this->addSql('DROP INDEX IDX_D79F6B11BE6CAE90');
        $this->addSql('CREATE TEMPORARY TABLE __temp__participant AS SELECT id, target_id, party_id, mission_id, name, email_address, uid, is_alive, number_of_kills FROM participant');
        $this->addSql('DROP TABLE participant');
        $this->addSql('CREATE TABLE participant (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, target_id INTEGER DEFAULT NULL, party_id INTEGER DEFAULT NULL, mission_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL, email_address VARCHAR(255) NOT NULL, uid VARCHAR(255) NOT NULL, is_alive BOOLEAN NOT NULL, number_of_kills INTEGER NOT NULL)');
        $this->addSql('INSERT INTO participant (id, target_id, party_id, mission_id, name, email_address, uid, is_alive, number_of_kills) SELECT id, target_id, party_id, mission_id, name, email_address, uid, is_alive, number_of_kills FROM __temp__participant');
        $this->addSql('DROP TABLE __temp__participant');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D79F6B11158E0B66 ON participant (target_id)');
        $this->addSql('CREATE INDEX IDX_D79F6B11213C1059 ON participant (party_id)');
        $this->addSql('CREATE INDEX IDX_D79F6B11BE6CAE90 ON participant (mission_id)');
    }
}
