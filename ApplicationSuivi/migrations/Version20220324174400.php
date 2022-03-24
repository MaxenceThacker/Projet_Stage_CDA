<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220324174400 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE alternants (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formateurs (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE responsables_legaux (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tuteurs (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, id_alternant_id INT NOT NULL, id_tuteur_id INT DEFAULT NULL, id_formateur_id INT DEFAULT NULL, id_responsable_legal_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D649F570E9E3 (id_alternant_id), UNIQUE INDEX UNIQ_8D93D6496D9D4FF (id_tuteur_id), UNIQUE INDEX UNIQ_8D93D649369CFA23 (id_formateur_id), UNIQUE INDEX UNIQ_8D93D6494AE3A1E7 (id_responsable_legal_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `user` ADD CONSTRAINT FK_8D93D649F570E9E3 FOREIGN KEY (id_alternant_id) REFERENCES alternants (id)');
        $this->addSql('ALTER TABLE `user` ADD CONSTRAINT FK_8D93D6496D9D4FF FOREIGN KEY (id_tuteur_id) REFERENCES tuteurs (id)');
        $this->addSql('ALTER TABLE `user` ADD CONSTRAINT FK_8D93D649369CFA23 FOREIGN KEY (id_formateur_id) REFERENCES formateurs (id)');
        $this->addSql('ALTER TABLE `user` ADD CONSTRAINT FK_8D93D6494AE3A1E7 FOREIGN KEY (id_responsable_legal_id) REFERENCES responsables_legaux (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D649F570E9E3');
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D649369CFA23');
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D6494AE3A1E7');
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D6496D9D4FF');
        $this->addSql('DROP TABLE alternants');
        $this->addSql('DROP TABLE formateurs');
        $this->addSql('DROP TABLE responsables_legaux');
        $this->addSql('DROP TABLE tuteurs');
        $this->addSql('DROP TABLE `user`');
    }
}
