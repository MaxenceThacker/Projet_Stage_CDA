<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220328143752 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE formations (id INT AUTO_INCREMENT NOT NULL, sigle_formation VARCHAR(150) NOT NULL, intitule_formation VARCHAR(150) NOT NULL, code_titre_formation VARCHAR(50) NOT NULL, millesime_formation DATE NOT NULL, date_parution_formation DATE NOT NULL, nsfformation VARCHAR(10) NOT NULL, romeformation VARCHAR(5) NOT NULL, date_fin_valdte_aggrment_formation DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD name_user VARCHAR(150) NOT NULL, ADD lastname_user VARCHAR(150) NOT NULL, ADD ddn_user DATE NOT NULL, ADD adresse_user VARCHAR(255) NOT NULL, ADD complt_adresse_user VARCHAR(255) DEFAULT NULL, ADD num_tel_user INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE formations');
        $this->addSql('ALTER TABLE `user` DROP name_user, DROP lastname_user, DROP ddn_user, DROP adresse_user, DROP complt_adresse_user, DROP num_tel_user');
    }
}
