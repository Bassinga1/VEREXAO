<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230912195747 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE marque (id INT AUTO_INCREMENT NOT NULL, produit_id INT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, image_name VARCHAR(255) NOT NULL, term LONGTEXT DEFAULT NULL, is_active TINYINT(1) NOT NULL, updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_5A6F91CEF347EFB (produit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, payment_terms_id INT NOT NULL, image_name VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, term LONGTEXT NOT NULL, price DOUBLE PRECISION DEFAULT NULL, is_active TINYINT(1) NOT NULL, updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_29A5EC2713B26D4F (payment_terms_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE marque ADD CONSTRAINT FK_5A6F91CEF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC2713B26D4F FOREIGN KEY (payment_terms_id) REFERENCES payment_term (id)');
        $this->addSql('ALTER TABLE image ADD marque_id INT NOT NULL, ADD produit_id INT NOT NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F4827B9B2 FOREIGN KEY (marque_id) REFERENCES marque (id)');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('CREATE INDEX IDX_C53D045F4827B9B2 ON image (marque_id)');
        $this->addSql('CREATE INDEX IDX_C53D045FF347EFB ON image (produit_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F4827B9B2');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045FF347EFB');
        $this->addSql('ALTER TABLE marque DROP FOREIGN KEY FK_5A6F91CEF347EFB');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC2713B26D4F');
        $this->addSql('DROP TABLE marque');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP INDEX IDX_C53D045F4827B9B2 ON image');
        $this->addSql('DROP INDEX IDX_C53D045FF347EFB ON image');
        $this->addSql('ALTER TABLE image DROP marque_id, DROP produit_id');
    }
}
