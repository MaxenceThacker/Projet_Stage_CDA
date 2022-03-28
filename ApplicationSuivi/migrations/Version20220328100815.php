<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220328100815 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD is_verified TINYINT(1) NOT NULL, ADD nom_user VARCHAR(150) NOT NULL, ADD prenom_user VARCHAR(150) NOT NULL, ADD ddn_user DATE NOT NULL, ADD adresse_user VARCHAR(255) NOT NULL, ADD complement_adresse_user VARCHAR(255) DEFAULT NULL, ADD numero_tel_user INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` DROP is_verified, DROP nom_user, DROP prenom_user, DROP ddn_user, DROP adresse_user, DROP complement_adresse_user, DROP numero_tel_user');
    }
}
