<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20230422194639 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'add value objects to link table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE link ADD description LONGTEXT DEFAULT NULL, ADD click_count INT NOT NULL, ADD unique_visit_count INT NOT NULL, ADD total_visit_count INT NOT NULL, ADD has_automatic_redirect TINYINT(1) NOT NULL, ADD redirect_delay INT DEFAULT NULL, ADD meta_title VARCHAR(255) NOT NULL, ADD meta_description TINYTEXT DEFAULT NULL, ADD meta_canonical_url VARCHAR(255) NOT NULL, ADD meta_image VARCHAR(255) DEFAULT NULL, ADD meta_favicon VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE link DROP description, DROP click_count, DROP unique_visit_count, DROP total_visit_count, DROP has_automatic_redirect, DROP redirect_delay, DROP meta_title, DROP meta_description, DROP meta_canonical_url, DROP meta_image, DROP meta_favicon');
    }
}
