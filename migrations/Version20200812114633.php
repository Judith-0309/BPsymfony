<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200812114633 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE clientparticulier (id INT AUTO_INCREMENT NOT NULL, compte_id INT NOT NULL, nom LONGTEXT NOT NULL, prenom LONGTEXT NOT NULL, telephone VARCHAR(20) NOT NULL, genre LONGTEXT NOT NULL, email VARCHAR(100) NOT NULL, adresse VARCHAR(200) NOT NULL, profession LONGTEXT NOT NULL, salarie LONGTEXT NOT NULL, salaire_actuel NUMERIC(20, 3) NOT NULL, nom_employeur LONGTEXT NOT NULL, cni VARCHAR(25) NOT NULL, INDEX IDX_9FDB19CAF2C56620 (compte_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte (id INT AUTO_INCREMENT NOT NULL, type_compte VARCHAR(10) NOT NULL, numero_compte VARCHAR(10) NOT NULL, cle_rib VARCHAR(5) NOT NULL, etat_compte LONGTEXT NOT NULL, depot_initial NUMERIC(10, 0) NOT NULL, date_ouverture DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE clientparticulier ADD CONSTRAINT FK_9FDB19CAF2C56620 FOREIGN KEY (compte_id) REFERENCES compte (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE clientparticulier DROP FOREIGN KEY FK_9FDB19CAF2C56620');
        $this->addSql('DROP TABLE clientparticulier');
        $this->addSql('DROP TABLE compte');
    }
}
