<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221130164458 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `desc` (id INT AUTO_INCREMENT NOT NULL, info_aut_id_id INT DEFAULT NULL, text LONGTEXT NOT NULL, INDEX IDX_BB5AC54B84884D0 (info_aut_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, desc_id_id INT DEFAULT NULL, id_livre_id INT DEFAULT NULL, infoaut_id_id INT DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, taille VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, blobs LONGBLOB DEFAULT NULL, INDEX IDX_C53D045FF14D1BF4 (desc_id_id), INDEX IDX_C53D045F6702C95E (id_livre_id), INDEX IDX_C53D045F2CCD07E7 (infoaut_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE info_autrice (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE info_comp (id INT AUTO_INCREMENT NOT NULL, desc_id_id INT NOT NULL, img_id_id INT DEFAULT NULL, livre_id_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, INDEX IDX_9261BDB4F14D1BF4 (desc_id_id), INDEX IDX_9261BDB457883738 (img_id_id), INDEX IDX_9261BDB4EC470631 (livre_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livre (id INT AUTO_INCREMENT NOT NULL, desc_id_id INT NOT NULL, titre VARCHAR(255) NOT NULL, INDEX IDX_AC634F99F14D1BF4 (desc_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `desc` ADD CONSTRAINT FK_BB5AC54B84884D0 FOREIGN KEY (info_aut_id_id) REFERENCES info_autrice (id)');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FF14D1BF4 FOREIGN KEY (desc_id_id) REFERENCES `desc` (id)');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F6702C95E FOREIGN KEY (id_livre_id) REFERENCES livre (id)');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F2CCD07E7 FOREIGN KEY (infoaut_id_id) REFERENCES info_autrice (id)');
        $this->addSql('ALTER TABLE info_comp ADD CONSTRAINT FK_9261BDB4F14D1BF4 FOREIGN KEY (desc_id_id) REFERENCES `desc` (id)');
        $this->addSql('ALTER TABLE info_comp ADD CONSTRAINT FK_9261BDB457883738 FOREIGN KEY (img_id_id) REFERENCES image (id)');
        $this->addSql('ALTER TABLE info_comp ADD CONSTRAINT FK_9261BDB4EC470631 FOREIGN KEY (livre_id_id) REFERENCES livre (id)');
        $this->addSql('ALTER TABLE livre ADD CONSTRAINT FK_AC634F99F14D1BF4 FOREIGN KEY (desc_id_id) REFERENCES `desc` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `desc` DROP FOREIGN KEY FK_BB5AC54B84884D0');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045FF14D1BF4');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F6702C95E');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F2CCD07E7');
        $this->addSql('ALTER TABLE info_comp DROP FOREIGN KEY FK_9261BDB4F14D1BF4');
        $this->addSql('ALTER TABLE info_comp DROP FOREIGN KEY FK_9261BDB457883738');
        $this->addSql('ALTER TABLE info_comp DROP FOREIGN KEY FK_9261BDB4EC470631');
        $this->addSql('ALTER TABLE livre DROP FOREIGN KEY FK_AC634F99F14D1BF4');
        $this->addSql('DROP TABLE `desc`');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE info_autrice');
        $this->addSql('DROP TABLE info_comp');
        $this->addSql('DROP TABLE livre');
    }
}
