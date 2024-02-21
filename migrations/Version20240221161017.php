<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240221161017 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bid (id INT AUTO_INCREMENT NOT NULL, amount NUMERIC(10, 3) NOT NULL, status VARCHAR(255) NOT NULL, bidder_id INT NOT NULL, loan_id INT NOT NULL, INDEX IDX_4AF2B3F3BE40AFAE (bidder_id), INDEX IDX_4AF2B3F3CE73868F (loan_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE bid ADD CONSTRAINT FK_4AF2B3F3BE40AFAE FOREIGN KEY (bidder_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE bid ADD CONSTRAINT FK_4AF2B3F3CE73868F FOREIGN KEY (loan_id) REFERENCES loan (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bid DROP FOREIGN KEY FK_4AF2B3F3BE40AFAE');
        $this->addSql('ALTER TABLE bid DROP FOREIGN KEY FK_4AF2B3F3CE73868F');
        $this->addSql('DROP TABLE bid');
    }
}
