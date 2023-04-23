<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;


final class Version20230422200543 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'add value objects to link_visit table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE link_visit (id INT AUTO_INCREMENT NOT NULL, link_id INT NOT NULL, ip VARCHAR(255) NOT NULL, user_agent VARCHAR(500) DEFAULT NULL, referer VARCHAR(255) DEFAULT NULL, location_country VARCHAR(255) DEFAULT NULL, location_city VARCHAR(255) DEFAULT NULL, location_time_zone VARCHAR(255) DEFAULT NULL, location_longitude DOUBLE PRECISION DEFAULT NULL, location_latitude DOUBLE PRECISION DEFAULT NULL, location_accuracy_radius INT DEFAULT NULL, device_operating_system VARCHAR(255) DEFAULT NULL, device_client VARCHAR(255) DEFAULT NULL, device_device VARCHAR(255) DEFAULT NULL, device_is_bot TINYINT(1) DEFAULT 0 NOT NULL, INDEX IDX_ECC5B5E7ADA40271 (link_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE link_visit ADD CONSTRAINT FK_ECC5B5E7ADA40271 FOREIGN KEY (link_id) REFERENCES link (id)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE link_visit DROP FOREIGN KEY FK_ECC5B5E7ADA40271');
        $this->addSql('DROP TABLE link_visit');
    }
}
