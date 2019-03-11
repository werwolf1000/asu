<?php

use yii\db\Schema;
use jamband\schemadump\Migration;

class m190311_214501_schema extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        // advertimages
        $this->createTable('{{%advertimages}}', [
            'id' => $this->primaryKey()->unsigned(),
            'adver_id' => $this->integer(10)->unsigned()->null()->defaultValue(0),
            'host' => $this->string(100)->null(),
            'image' => $this->string(100)->null(),
            'small' => $this->string(100)->null(),
            'big' => $this->string(100)->null(),
            'dtcreate' => $this->datetime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ], $tableOptions);

        // avitoadvert
        $this->createTable('{{%avitoadvert}}', [
            'id' => $this->primaryKey()->unsigned(),
            'id_link' => $this->integer(10)->unsigned()->notNull()->defaultValue(0),
            'condition' => $this->string(100)->null()->comment('состояние'),
            'owners' => $this->string(100)->null()->comment('Владельцев по ПТС'),
            'mileage' => $this->string(100)->null()->comment('Пробег'),
            'rudder' => $this->string(100)->null()->comment('Руль'),
            'drive' => $this->string(100)->null()->comment('Привод'),
            'color' => $this->string(100)->null()->comment('Цвет'),
            'engine_capacity' => $this->string(100)->null()->comment('Объём двигателя'),
            'model' => $this->string(100)->null()->comment('Модель'),
            'mark' => $this->string(100)->null()->comment('Марка'),
            'year_of_issue' => $this->string(100)->null()->comment('Год выпуска'),
            'body_type' => $this->string(100)->null()->comment('Тип кузова'),
            'engine_type' => $this->string(100)->null()->comment('Тип двигателя'),
            'transmission' => $this->string(100)->null()->comment('Коробка передач'),
            'engine_power' => $this->string(100)->null()->comment('Мощность двигателя'),
            'number_of_doors' => $this->string(100)->null()->comment('Количество дверей'),
            'vin' => $this->string(100)->null()->comment('VIN или номер кузова'),
            'addr' => $this->string(500)->null()->comment('адрес'),
            'price' => $this->double()->null(),
            'dtcreate' => $this->datetime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'timechange' => $this->datetime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ], $tableOptions);

        // avitolistlink
        $this->createTable('{{%avitolistlink}}', [
            'id' => $this->primaryKey()->unsigned(),
            'link' => $this->string(500)->null()->unique(),
            'name' => $this->string(100)->null(),
            'year' => $this->date(4)->null(),
            'region' => $this->string(100)->null(),
            'dtcreate' => $this->datetime()->null()->defaultExpression('CURRENT_TIMESTAMP'),
            'timechange' => $this->datetime()->null()->defaultExpression('CURRENT_TIMESTAMP'),
            'process' => $this->tinyint(4)->notNull()->defaultValue(0),
        ], $tableOptions);

        // error
        $this->createTable('{{%error}}', [
            'id' => $this->primaryKey(),
            'msg' => $this->text()->null(),
            'file' => $this->string(500)->null(),
            'line' => $this->string(500)->null(),
            'code' => $this->string(500)->null(),
            'dtcreate' => $this->datetime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ], $tableOptions);

        // log
        $this->createTable('{{%log}}', [
            'id' => $this->primaryKey(),
            'step' => $this->string(100)->null(),
            'process' => $this->string(100)->null(),
            'dtcreate' => $this->datetime()->null()->defaultExpression('CURRENT_TIMESTAMP'),
        ], $tableOptions);

        // test
        $this->createTable('{{%test}}', [
            'id' => $this->primaryKey(),
        ], $tableOptions);

        // user
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255)->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string(255)->notNull(),
            'password_reset_token' => $this->string(255)->null()->unique(),
            'email' => $this->string(255)->notNull()->unique(),
            'status' => $this->smallInteger(6)->notNull()->defaultValue(10),
            'created_at' => $this->integer(11)->notNull(),
            'updated_at' => $this->integer(11)->notNull(),
        ], $tableOptions);

        // fk: advertimages
        $this->addForeignKey('fk_advertimages_adver_id', '{{%advertimages}}', 'adver_id', '{{%avitoadvert}}', 'id');

        // fk: avitoadvert
        $this->addForeignKey('fk_avitoadvert_id_link', '{{%avitoadvert}}', 'id_link', '{{%avitolistlink}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%advertimages}}'); // fk: adver_id
        $this->dropTable('{{%avitoadvert}}'); // fk: id_link
        $this->dropTable('{{%avitolistlink}}');
        $this->dropTable('{{%error}}');
        $this->dropTable('{{%log}}');
        $this->dropTable('{{%user}}');
    }
}
