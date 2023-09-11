<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230911163758 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE carousel (id INT AUTO_INCREMENT NOT NULL, image_name VARCHAR(255) NOT NULL, texte LONGTEXT DEFAULT NULL, updated_at DATETIME NOT NULL, tag VARCHAR(255) NOT NULL, rank_order INT NOT NULL, is_active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE home (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, texte LONGTEXT DEFAULT NULL, signature VARCHAR(255) DEFAULT NULL, is_active TINYINT(1) NOT NULL, image_name VARCHAR(255) NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, home_id INT NOT NULL, carousel_id INT NOT NULL, image_name VARCHAR(255) NOT NULL, rank_order INT NOT NULL, updated_at DATETIME NOT NULL, tag VARCHAR(255) NOT NULL, INDEX IDX_C53D045F28CDC89C (home_id), INDEX IDX_C53D045FC1CE5B98 (carousel_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F28CDC89C FOREIGN KEY (home_id) REFERENCES home (id)');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FC1CE5B98 FOREIGN KEY (carousel_id) REFERENCES carousel (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F28CDC89C');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045FC1CE5B98');
        $this->addSql('DROP TABLE carousel');
        $this->addSql('DROP TABLE home');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
