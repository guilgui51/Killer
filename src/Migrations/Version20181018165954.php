<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181018165954 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE killer_party (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, starting_date DATETIME NOT NULL, name VARCHAR(255) NOT NULL, uid VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE participant (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, target_id INTEGER DEFAULT NULL, party_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL, email_address VARCHAR(255) NOT NULL, uid VARCHAR(255) NOT NULL, is_alive BOOLEAN NOT NULL, mission_title VARCHAR(255) DEFAULT NULL, mission_text VARCHAR(255) DEFAULT NULL, number_of_kills INTEGER NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D79F6B11158E0B66 ON participant (target_id)');
        $this->addSql('CREATE INDEX IDX_D79F6B11213C1059 ON participant (party_id)');
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_name VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, is_admin BOOLEAN NOT NULL)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE killer_party');
        $this->addSql('DROP TABLE participant');
        $this->addSql('DROP TABLE user');
    }
}
