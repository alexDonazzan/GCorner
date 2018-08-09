<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180809094449 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE gcv2contents (id INT AUTO_INCREMENT NOT NULL, parent_id INT DEFAULT NULL, slug VARCHAR(150) NOT NULL, type VARCHAR(222) NOT NULL, sub_type VARCHAR(222) DEFAULT NULL, sub_type_id INT DEFAULT NULL, smarty INT NOT NULL, name VARCHAR(255) NOT NULL, css_class VARCHAR(20) NOT NULL, latitude INT NOT NULL, longitude INT NOT NULL, radius INT NOT NULL, place_str VARCHAR(50) NOT NULL, lastmod DATETIME NOT NULL, date_published DATETIME NOT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gcv2contents_i18n (id INT AUTO_INCREMENT NOT NULL, content_id INT NOT NULL, lang VARCHAR(5) NOT NULL, slug VARCHAR(50) NOT NULL, content LONGTEXT NOT NULL, meta_title VARCHAR(200) NOT NULL, meta_description LONGTEXT NOT NULL, meta_keywords VARCHAR(255) NOT NULL, h1_title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE gcv2contents');
        $this->addSql('DROP TABLE gcv2contents_i18n');
    }
}
