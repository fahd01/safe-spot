<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240513220603 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE actualite (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(500) NOT NULL, dt DATETIME DEFAULT NULL, img VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE likenews (id INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, new_id INT DEFAULT NULL, INDEX IDX_F33E2243BD06B3B3 (new_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE star_rep (id INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, nbstar INT NOT NULL, star_reps_id INT DEFAULT NULL, INDEX IDX_93F49F66301A7D19 (star_reps_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE likenews ADD CONSTRAINT FK_F33E2243BD06B3B3 FOREIGN KEY (new_id) REFERENCES actualite (id)');
        $this->addSql('ALTER TABLE star_rep ADD CONSTRAINT FK_93F49F66301A7D19 FOREIGN KEY (star_reps_id) REFERENCES Response (id)');
        $this->addSql('ALTER TABLE Investissement CHANGE duree duree DOUBLE PRECISION NOT NULL, CHANGE prix_a prix_a INT NOT NULL');
        $this->addSql('ALTER TABLE Reclamation CHANGE description description VARCHAR(500) NOT NULL, CHANGE dt dt DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE Response CHANGE reponse reponse VARCHAR(500) NOT NULL');
        $this->addSql('ALTER TABLE Response ADD CONSTRAINT FK_C70D69AD2D6BA2D9 FOREIGN KEY (reclamation_id) REFERENCES Reclamation (id)');
        $this->addSql('CREATE INDEX IDX_C70D69AD2D6BA2D9 ON Response (reclamation_id)');
        $this->addSql('ALTER TABLE User CHANGE email email VARCHAR(180) NOT NULL, CHANGE roles roles JSON NOT NULL, CHANGE date_de_naissance date_de_naissance DATE DEFAULT NULL, CHANGE adresse adresse VARCHAR(255) DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2DA17977E7927C74 ON User (email)');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC6B39F0D0');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC6B39F0D0 FOREIGN KEY (id_news_id) REFERENCES actualite (id)');
        $this->addSql('ALTER TABLE dons CHANGE taux taux INT DEFAULT NULL');
        $this->addSql('ALTER TABLE dons ADD CONSTRAINT FK_E4F955FACEE86437 FOREIGN KEY (investissements_id) REFERENCES Investissement (id)');
        $this->addSql('CREATE INDEX IDX_E4F955FACEE86437 ON dons (investissements_id)');
        $this->addSql('ALTER TABLE reset_password_request ADD id INT AUTO_INCREMENT NOT NULL, CHANGE selector selector VARCHAR(20) NOT NULL, CHANGE hashed_token hashed_token VARCHAR(100) NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES User (id)');
        $this->addSql('CREATE INDEX IDX_7CE748AA76ED395 ON reset_password_request (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE likenews DROP FOREIGN KEY FK_F33E2243BD06B3B3');
        $this->addSql('ALTER TABLE star_rep DROP FOREIGN KEY FK_93F49F66301A7D19');
        $this->addSql('DROP TABLE actualite');
        $this->addSql('DROP TABLE likenews');
        $this->addSql('DROP TABLE star_rep');
        $this->addSql('ALTER TABLE dons DROP FOREIGN KEY FK_E4F955FACEE86437');
        $this->addSql('DROP INDEX IDX_E4F955FACEE86437 ON dons');
        $this->addSql('ALTER TABLE dons CHANGE taux taux DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC6B39F0D0');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC6B39F0D0 FOREIGN KEY (id_news_id) REFERENCES news (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('DROP INDEX UNIQ_2DA17977E7927C74 ON User');
        $this->addSql('ALTER TABLE User CHANGE email email VARCHAR(255) NOT NULL, CHANGE roles roles VARCHAR(255) NOT NULL, CHANGE date_de_naissance date_de_naissance DATE NOT NULL, CHANGE adresse adresse VARCHAR(255) NOT NULL, CHANGE updated_at updated_at VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE Response DROP FOREIGN KEY FK_C70D69AD2D6BA2D9');
        $this->addSql('DROP INDEX IDX_C70D69AD2D6BA2D9 ON Response');
        $this->addSql('ALTER TABLE Response CHANGE reponse reponse VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE Reclamation CHANGE description description VARCHAR(255) NOT NULL, CHANGE dt dt DATE NOT NULL');
        $this->addSql('ALTER TABLE reset_password_request MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP INDEX IDX_7CE748AA76ED395 ON reset_password_request');
        $this->addSql('DROP INDEX `primary` ON reset_password_request');
        $this->addSql('ALTER TABLE reset_password_request DROP id, CHANGE selector selector VARCHAR(255) NOT NULL, CHANGE hashed_token hashed_token VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE Investissement CHANGE duree duree INT NOT NULL, CHANGE prix_a prix_a DOUBLE PRECISION NOT NULL');
    }
}
