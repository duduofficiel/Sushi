<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250114125958 extends AbstractMigration
{
    public function getDescription(): string
    {
        // Nous retournons la description recommandée - ვაბრუნებთ სარეკომენდაციო აღწერას
        return '';
    }

    public function up(Schema $schema): void
    {
        // Créez le tableau pricing_plan - შექმენი pricing_plan ცხრილი
        $this->addSql('CREATE TABLE pricing_plan (
            id INT AUTO_INCREMENT NOT NULL, 
            name VARCHAR(50) NOT NULL, 
            price INT NOT NULL, 
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Créez le tableau pricing_plan_pricing_plan_feature - შექმენი pricing_plan_pricing_plan_feature ცხრილი
        $this->addSql('CREATE TABLE pricing_plan_pricing_plan_feature (
            pricing_plan_id INT NOT NULL, 
            pricing_plan_feature_id INT NOT NULL, 
            INDEX IDX_D19087D429628C71 (pricing_plan_id), 
            INDEX IDX_D19087D46C9002D8 (pricing_plan_feature_id), 
            PRIMARY KEY(pricing_plan_id, pricing_plan_feature_id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Créez le tableau pricing_plan_benefit - შექმენი pricing_plan_benefit ცხრილი
        $this->addSql('CREATE TABLE pricing_plan_benefit (
            id INT AUTO_INCREMENT NOT NULL, 
            pricing_plan_id INT NOT NULL, 
            name VARCHAR(50) NOT NULL, 
            INDEX IDX_E6A62C5F29628C71 (pricing_plan_id), 
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Créez le tableau pricing_plan_feature - შექმენი pricing_plan_feature ცხრილი
        $this->addSql('CREATE TABLE pricing_plan_feature (
            id INT AUTO_INCREMENT NOT NULL, 
            name VARCHAR(50) NOT NULL, 
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // "Enregistrements de données commencées dans le tableau - ცხრილში დაწყებული მონაცემების ჩანაწერები
        $this->addSql("INSERT INTO pricing_plan VALUES (nextval('pricing_plan_id_seq'), 'Free', 0)");
        $this->addSql("INSERT INTO pricing_plan VALUES (nextval('pricing_plan_id_seq'), 'Pro', 15)");
        $this->addSql("INSERT INTO pricing_plan VALUES (nextval('pricing_plan_id_seq'), 'Enterprise', 29)");

        // Ajout d'enregistrements dans le tableau pricing_plan_benefit - ჩანაწერების დამატება pricing_plan_benefit ცხრილში
        $this->addSql("INSERT INTO pricing_plan_benefit VALUES (nextval('pricing_plan_benefit_id_seq'), 1, '10 users included')");
        $this->addSql("INSERT INTO pricing_plan_benefit VALUES (nextval('pricing_plan_benefit_id_seq'), 1, '2 GB of storage')");
        $this->addSql("INSERT INTO pricing_plan_benefit VALUES (nextval('pricing_plan_benefit_id_seq'), 1, 'Email support')");
        $this->addSql("INSERT INTO pricing_plan_benefit VALUES (nextval('pricing_plan_benefit_id_seq'), 1, 'Help center access')");

        // Enregistrements supplémentaires dans le tableau pricing_plan_benefit - დამატებითი ჩანაწერები pricing_plan_benefit ცხრილში
        $this->addSql("INSERT INTO pricing_plan_benefit VALUES (nextval('pricing_plan_benefit_id_seq'), 2, '20 users included')");
        $this->addSql("INSERT INTO pricing_plan_benefit VALUES (nextval('pricing_plan_benefit_id_seq'), 2, '10 GB of storage')");
        $this->addSql("INSERT INTO pricing_plan_benefit VALUES (nextval('pricing_plan_benefit_id_seq'), 2, 'Email support')");
        $this->addSql("INSERT INTO pricing_plan_benefit VALUES (nextval('pricing_plan_benefit_id_seq'), 2, 'Help center access')");

        // Enregistrements supplémentaires dans le tableau pricing_plan_benefit - დამატებითი ჩანაწერები pricing_plan_benefit ცხრილში
        $this->addSql("INSERT INTO pricing_plan_benefit VALUES (nextval('pricing_plan_benefit_id_seq'), 3, '30 users included')");
        $this->addSql("INSERT INTO pricing_plan_benefit VALUES (nextval('pricing_plan_benefit_id_seq'), 3, '15 GB of storage')");
        $this->addSql("INSERT INTO pricing_plan_benefit VALUES (nextval('pricing_plan_benefit_id_seq'), 3, 'Email support')");
        $this->addSql("INSERT INTO pricing_plan_benefit VALUES (nextval('pricing_plan_benefit_id_seq'), 3, 'Help center access')");

        // Enregistrements dans le tableau pricing_plan_feature - ჩანაწერები pricing_plan_feature ცხრილში
        $this->addSql("INSERT INTO pricing_plan_feature VALUES (nextval('pricing_plan_feature_id_seq'), 'Public')");
        $this->addSql("INSERT INTO pricing_plan_feature VALUES (nextval('pricing_plan_feature_id_seq'), 'Private')");
        $this->addSql("INSERT INTO pricing_plan_feature VALUES (nextval('pricing_plan_feature_id_seq'), 'Permissions')");
        $this->addSql("INSERT INTO pricing_plan_feature VALUES (nextval('pricing_plan_feature_id_seq'), 'Sharing')");
        $this->addSql("INSERT INTO pricing_plan_feature VALUES (nextval('pricing_plan_feature_id_seq'), 'Unlimited members')");
        $this->addSql("INSERT INTO pricing_plan_feature VALUES (nextval('pricing_plan_feature_id_seq'), 'Extra security')");

        // Ajout d'enregistrements dans le tableau pricing_plan_pricing_plan_feature - pricing_plan_pricing_plan_feature ცხრილში ჩანაწერების დამატება
        $this->addSql("INSERT INTO pricing_plan_pricing_plan_feature VALUES (1, 1)");
        $this->addSql("INSERT INTO pricing_plan_pricing_plan_feature VALUES (1, 3)");

        // Enregistrements supplémentaires dans le tableau pricing_plan_pricing_plan_feature - დამატებითი ჩანაწერები pricing_plan_pricing_plan_feature ცხრილში
        $this->addSql("INSERT INTO pricing_plan_pricing_plan_feature VALUES (2, 1)");
        $this->addSql("INSERT INTO pricing_plan_pricing_plan_feature VALUES (2, 2)");
        $this->addSql("INSERT INTO pricing_plan_pricing_plan_feature VALUES (2, 3)");
        $this->addSql("INSERT INTO pricing_plan_pricing_plan_feature VALUES (2, 4)");
        $this->addSql("INSERT INTO pricing_plan_pricing_plan_feature VALUES (2, 5)");

        // Encore un flux dans le tableau pricing_plan_pricing_plan_feature - კიდევ ერთი ნაკადი pricing_plan_pricing_plan_feature ცხრილში
        $this->addSql("INSERT INTO pricing_plan_pricing_plan_feature VALUES (3, 1)");
        $this->addSql("INSERT INTO pricing_plan_pricing_plan_feature VALUES (3, 2)");
        $this->addSql("INSERT INTO pricing_plan_pricing_plan_feature VALUES (3, 3)");
        $this->addSql("INSERT INTO pricing_plan_pricing_plan_feature VALUES (3, 4)");
        $this->addSql("INSERT INTO pricing_plan_pricing_plan_feature VALUES (3, 5)");
        $this->addSql("INSERT INTO pricing_plan_pricing_plan_feature VALUES (3, 6)");
    }

    public function down(Schema $schema): void
    {
        // Supprimer les classes de chaque tableau - თითოეული ცხრილიდან ქლასების წაშლა
        $this->addSql('ALTER TABLE pricing_plan_pricing_plan_feature DROP FOREIGN KEY FK_D19087D429628C71');
        $this->addSql('ALTER TABLE pricing_plan_pricing_plan_feature DROP FOREIGN KEY FK_D19087D46C9002D8');
        $this->addSql('ALTER TABLE pricing_plan_benefit DROP FOREIGN KEY FK_E6A62C5F29628C71');
        
        // Démolir les tableaux - ჩამოშალე ცხრილები
        $this->addSql('DROP TABLE pricing_plan');
        $this->addSql('DROP TABLE pricing_plan_pricing_plan_feature');
        $this->addSql('DROP TABLE pricing_plan_benefit');
        $this->addSql('DROP TABLE pricing_plan_feature');
    }
}
