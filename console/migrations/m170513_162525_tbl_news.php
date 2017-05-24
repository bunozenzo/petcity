<?php

use yii\db\Migration;

class m170513_162525_tbl_news extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%News}}', [
            'new_id' => $this->primaryKey(),
            'new_cat_id' => $this->integer()->notNull(),
            'new_title' => $this->string(100)->notNull(),
            'new_name' => $this->string(100)->notNull(),
            'new_image' => $this->string()->notNull(),
            'new_descrition' => $this->string()->notNull(),
            'new_content'=>$this->text()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'date_create' => $this->integer()->notNull(),
            'date_update' => $this->integer()->notNull(),
        ], $tableOptions);
        $this->addForeignKey('fk_news_category', 'News', 'new_cat_id', 'Category', 'cat_id');
    }

    public function down()
    {
        $this->dropTable('{{%News}}');
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
