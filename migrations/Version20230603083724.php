<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230603083724 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_subscription ADD user_id INT NOT NULL, ADD subscription_id INT NOT NULL');
        $this->addSql('ALTER TABLE user_subscription ADD CONSTRAINT FK_230A18D1A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_subscription ADD CONSTRAINT FK_230A18D19A1887DC FOREIGN KEY (subscription_id) REFERENCES subscription (id)');
        $this->addSql('CREATE INDEX IDX_230A18D1A76ED395 ON user_subscription (user_id)');
        $this->addSql('CREATE INDEX IDX_230A18D19A1887DC ON user_subscription (subscription_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_subscription DROP FOREIGN KEY FK_230A18D1A76ED395');
        $this->addSql('ALTER TABLE user_subscription DROP FOREIGN KEY FK_230A18D19A1887DC');
        $this->addSql('DROP INDEX IDX_230A18D1A76ED395 ON user_subscription');
        $this->addSql('DROP INDEX IDX_230A18D19A1887DC ON user_subscription');
        $this->addSql('ALTER TABLE user_subscription DROP user_id, DROP subscription_id');
    }
}
