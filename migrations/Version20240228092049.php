<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240228092049 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE automation (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, bid_amount NUMERIC(10, 3) NOT NULL, owner_id INT NOT NULL, INDEX IDX_C9739CEE7E3C61F9 (owner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE automation_rule (id INT AUTO_INCREMENT NOT NULL, value NUMERIC(10, 3) NOT NULL, attribute VARCHAR(255) NOT NULL, operator VARCHAR(255) NOT NULL, automation_id INT NOT NULL, INDEX IDX_3700417BD1C5DDC3 (automation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE automation ADD CONSTRAINT FK_C9739CEE7E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE automation_rule ADD CONSTRAINT FK_3700417BD1C5DDC3 FOREIGN KEY (automation_id) REFERENCES automation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE automation DROP FOREIGN KEY FK_C9739CEE7E3C61F9');
        $this->addSql('ALTER TABLE automation_rule DROP FOREIGN KEY FK_3700417BD1C5DDC3');
        $this->addSql('DROP TABLE automation');
        $this->addSql('DROP TABLE automation_rule');
    }
}
