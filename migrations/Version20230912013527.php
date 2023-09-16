<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230912013527 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE payment_term (id INT AUTO_INCREMENT NOT NULL, service_id INT NOT NULL, term LONGTEXT NOT NULL, method TINYINT(1) NOT NULL, INDEX IDX_848C70F9ED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, term LONGTEXT DEFAULT NULL, price VARCHAR(255) DEFAULT NULL, availability DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, service_id INT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, term LONGTEXT DEFAULT NULL, is_active TINYINT(1) NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_8CDE5729ED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE payment_term ADD CONSTRAINT FK_848C70F9ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE type ADD CONSTRAINT FK_8CDE5729ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE image ADD type_id INT NOT NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FC54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
        $this->addSql('CREATE INDEX IDX_C53D045FC54C8C93 ON image (type_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045FC54C8C93');
        $this->addSql('ALTER TABLE payment_term DROP FOREIGN KEY FK_848C70F9ED5CA9E6');
        $this->addSql('ALTER TABLE type DROP FOREIGN KEY FK_8CDE5729ED5CA9E6');
        $this->addSql('DROP TABLE payment_term');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE type');
        $this->addSql('DROP INDEX IDX_C53D045FC54C8C93 ON image');
        $this->addSql('ALTER TABLE image DROP type_id');
    }
}
