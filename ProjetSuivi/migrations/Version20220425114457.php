<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220425114457 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE absences ADD justification VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE centres ADD nom_centre VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE ddn_user ddn_user DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE absences DROP justification');
        $this->addSql('ALTER TABLE centres DROP nom_centre');
        $this->addSql('ALTER TABLE `user` CHANGE ddn_user ddn_user VARCHAR(255) NOT NULL');
    }
}
