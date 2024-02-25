<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240222094003 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bid (id INT AUTO_INCREMENT NOT NULL, amount NUMERIC(10, 3) NOT NULL, status VARCHAR(255) NOT NULL, bidder_id INT NOT NULL, loan_id INT NOT NULL, INDEX IDX_4AF2B3F3BE40AFAE (bidder_id), INDEX IDX_4AF2B3F3CE73868F (loan_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, contenu VARCHAR(255) NOT NULL, id_news_id INT NOT NULL, id_user_id INT NOT NULL, INDEX IDX_67F068BC6B39F0D0 (id_news_id), INDEX IDX_67F068BC79F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE investissement (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, montant DOUBLE PRECISION NOT NULL, taux INT NOT NULL, date_debut DATETIME NOT NULL, echeance DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE loan (id INT AUTO_INCREMENT NOT NULL, amount NUMERIC(10, 3) NOT NULL, interest NUMERIC(10, 2) NOT NULL, term SMALLINT NOT NULL, purpose VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, borrower_id INT NOT NULL, INDEX IDX_C5D30D0311CE312B (borrower_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE news (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, img VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(255) NOT NULL, date_dajout DATETIME NOT NULL, titre VARCHAR(255) NOT NULL, user_id_id INT NOT NULL, INDEX IDX_CE6064049D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE reponse (id INT AUTO_INCREMENT NOT NULL, repo VARCHAR(255) NOT NULL, date_repo DATETIME NOT NULL, id_reclamation_id INT NOT NULL, UNIQUE INDEX UNIQ_5FB6DEC7100D1FDF (id_reclamation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE bid ADD CONSTRAINT FK_4AF2B3F3BE40AFAE FOREIGN KEY (bidder_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE bid ADD CONSTRAINT FK_4AF2B3F3CE73868F FOREIGN KEY (loan_id) REFERENCES loan (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC6B39F0D0 FOREIGN KEY (id_news_id) REFERENCES news (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC79F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE loan ADD CONSTRAINT FK_C5D30D0311CE312B FOREIGN KEY (borrower_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064049D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC7100D1FDF FOREIGN KEY (id_reclamation_id) REFERENCES reclamation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bid DROP FOREIGN KEY FK_4AF2B3F3BE40AFAE');
        $this->addSql('ALTER TABLE bid DROP FOREIGN KEY FK_4AF2B3F3CE73868F');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC6B39F0D0');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC79F37AE5');
        $this->addSql('ALTER TABLE loan DROP FOREIGN KEY FK_C5D30D0311CE312B');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064049D86650F');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC7100D1FDF');
        $this->addSql('DROP TABLE bid');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE investissement');
        $this->addSql('DROP TABLE loan');
        $this->addSql('DROP TABLE news');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
