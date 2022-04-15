<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220413115400 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE etudiants (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE professeurs (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, profs_id INT DEFAULT NULL, etudiands_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D649BDDFA3C9 (profs_id), UNIQUE INDEX UNIQ_8D93D649C8933244 (etudiands_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `user` ADD CONSTRAINT FK_8D93D649BDDFA3C9 FOREIGN KEY (profs_id) REFERENCES professeurs (id)');
        $this->addSql('ALTER TABLE `user` ADD CONSTRAINT FK_8D93D649C8933244 FOREIGN KEY (etudiands_id) REFERENCES etudiants (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D649C8933244');
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D649BDDFA3C9');
        $this->addSql('DROP TABLE etudiants');
        $this->addSql('DROP TABLE professeurs');
        $this->addSql('DROP TABLE `user`');
    }
}
