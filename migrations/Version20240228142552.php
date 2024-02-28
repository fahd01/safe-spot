<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240228142552 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bid ADD automation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bid ADD CONSTRAINT FK_4AF2B3F3D1C5DDC3 FOREIGN KEY (automation_id) REFERENCES automation (id)');
        $this->addSql('CREATE INDEX IDX_4AF2B3F3D1C5DDC3 ON bid (automation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bid DROP FOREIGN KEY FK_4AF2B3F3D1C5DDC3');
        $this->addSql('DROP INDEX IDX_4AF2B3F3D1C5DDC3 ON bid');
        $this->addSql('ALTER TABLE bid DROP automation_id');
    }
}
