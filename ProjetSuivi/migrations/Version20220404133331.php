<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220404133331 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE absences (id INT AUTO_INCREMENT NOT NULL, date_absence DATE NOT NULL, nbr_heure_absence INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE alternants (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_B508067E79F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE centres (id INT AUTO_INCREMENT NOT NULL, adresse_centre VARCHAR(255) NOT NULL, complt_adresse_centre VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE documents (id INT AUTO_INCREMENT NOT NULL, libelle_document VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenements (id INT AUTO_INCREMENT NOT NULL, heure_evenement TIME NOT NULL, date_evenement DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formateurs (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_FD80E57479F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formations (id INT AUTO_INCREMENT NOT NULL, sigle_formation VARCHAR(150) NOT NULL, intitule_formation VARCHAR(255) NOT NULL, code_titre_formation VARCHAR(50) NOT NULL, millesime_formation DATE NOT NULL, date_parution_formation DATE NOT NULL, nsf_formation VARCHAR(10) NOT NULL, rome_formation VARCHAR(5) NOT NULL, date_fin_valdte_aggrmt_formation DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lieux_evenement (id INT AUTO_INCREMENT NOT NULL, libelle_lieu_evenement VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE responsables_legaux (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_3771A0C679F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tuteurs (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_5831674379F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE types_absence (id INT AUTO_INCREMENT NOT NULL, libelle_type_absence VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE types_evenement (id INT AUTO_INCREMENT NOT NULL, libelle_type_evenement VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email_user VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, nom_user VARCHAR(150) NOT NULL, prenom_user VARCHAR(150) NOT NULL, ddn_user DATE NOT NULL, adresse_user VARCHAR(255) NOT NULL, complt_adresse_user VARCHAR(255) DEFAULT NULL, num_tel_user INT NOT NULL, UNIQUE INDEX UNIQ_8D93D64912A5F6CC (email_user), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE alternants ADD CONSTRAINT FK_B508067E79F37AE5 FOREIGN KEY (id_user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE formateurs ADD CONSTRAINT FK_FD80E57479F37AE5 FOREIGN KEY (id_user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE responsables_legaux ADD CONSTRAINT FK_3771A0C679F37AE5 FOREIGN KEY (id_user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE tuteurs ADD CONSTRAINT FK_5831674379F37AE5 FOREIGN KEY (id_user_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE alternants DROP FOREIGN KEY FK_B508067E79F37AE5');
        $this->addSql('ALTER TABLE formateurs DROP FOREIGN KEY FK_FD80E57479F37AE5');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE responsables_legaux DROP FOREIGN KEY FK_3771A0C679F37AE5');
        $this->addSql('ALTER TABLE tuteurs DROP FOREIGN KEY FK_5831674379F37AE5');
        $this->addSql('DROP TABLE absences');
        $this->addSql('DROP TABLE alternants');
        $this->addSql('DROP TABLE centres');
        $this->addSql('DROP TABLE documents');
        $this->addSql('DROP TABLE evenements');
        $this->addSql('DROP TABLE formateurs');
        $this->addSql('DROP TABLE formations');
        $this->addSql('DROP TABLE lieux_evenement');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE responsables_legaux');
        $this->addSql('DROP TABLE tuteurs');
        $this->addSql('DROP TABLE types_absence');
        $this->addSql('DROP TABLE types_evenement');
        $this->addSql('DROP TABLE `user`');
    }
}
