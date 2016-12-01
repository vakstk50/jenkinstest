<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161201194217 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
	$this->addSql('CREATE TABLE `Phone` (
  `id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `number` bigint(20) NOT NULL,
  '.
//`numberFormatted` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  '`priority` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sipDist` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
');
$this->addSql('CREATE FUNCTION WEIGHTED_AVERAGE (n1 INT, n2 INT, n3 INT, n4 INT)
  RETURNS INT
   DETERMINISTIC
    BEGIN
     DECLARE avg INT;
     SET avg = (n1+n2+n3*2+n4*4)/8;
     RETURN avg;
    END'
);

    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
