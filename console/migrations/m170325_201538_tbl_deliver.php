<?php

use yii\db\Migration;

class m170325_201538_tbl_deliver extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%Deliver}}', [
            'del_id' => $this->primaryKey(),
            'del_name' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'date_create' => $this->integer()->notNull(),
            'date_update' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
       $this->dropTable('{{%Deliver}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
