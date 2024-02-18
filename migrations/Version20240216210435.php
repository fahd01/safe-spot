<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240216210435 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE investissement ADD id_user_id INT NOT NULL, ADD iduser_id INT NOT NULL');
        $this->addSql('ALTER TABLE investissement ADD CONSTRAINT FK_B8E64E0179F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE investissement ADD CONSTRAINT FK_B8E64E01786A81FB FOREIGN KEY (iduser_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_B8E64E0179F37AE5 ON investissement (id_user_id)');
        $this->addSql('CREATE INDEX IDX_B8E64E01786A81FB ON investissement (iduser_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE investissement DROP FOREIGN KEY FK_B8E64E0179F37AE5');
        $this->addSql('ALTER TABLE investissement DROP FOREIGN KEY FK_B8E64E01786A81FB');
        $this->addSql('DROP INDEX IDX_B8E64E0179F37AE5 ON investissement');
        $this->addSql('DROP INDEX IDX_B8E64E01786A81FB ON investissement');
        $this->addSql('ALTER TABLE investissement DROP id_user_id, DROP iduser_id');
    }
}
