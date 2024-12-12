<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241210130013 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE designer DROP FOREIGN KEY FK_B3A0DE5BBF396750');
        $this->addSql('DROP TABLE designer');
        $this->addSql('ALTER TABLE comment CHANGE content_comment content_comment VARCHAR(500) NOT NULL');
        $this->addSql('ALTER TABLE creation ADD updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD image_name VARCHAR(255)');
        $this->addSql('ALTER TABLE user DROP discriminator');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE designer (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE designer ADD CONSTRAINT FK_B3A0DE5BBF396750 FOREIGN KEY (id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comment CHANGE content_comment content_comment VARCHAR(250) NOT NULL');
        $this->addSql('ALTER TABLE creation DROP updated_at, DROP image_name');
        $this->addSql('ALTER TABLE `user` ADD discriminator VARCHAR(255) NOT NULL');
    }
}
