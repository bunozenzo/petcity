<?php

use yii\db\Migration;

class m170305_031858_tbl_product extends Migration
{
    public function up()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%Product}}', [
            'pro_id' => $this->primaryKey(),
            'pro_name' => $this->string(100)->notNull(),
            'pro_image' => $this->string()->notNull(),
            'pro_image1' => $this->string(),
            'pro_image2' => $this->string(),
            'pro_price' => $this->string()->notNull(),
            'pro_sale_off' => $this->integer(),
            'pro_cat_id' => $this->integer()->notNull(),
            'pro_supplier_id' => $this->integer()->notNull(),
            'pro_made_id' => $this->integer()->notNull(),
            'pro_size_id' => $this->integer()->notNull(),
            'description' => $this->text()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'begin_date_sale_off' =>$this->date(),
            'end_date_sale_off' =>$this->date(),
            'date_create' => $this->integer()->notNull(),
            'date_update' => $this->integer()->notNull(),
        ], $tableOptions);
        $this->addForeignKey('fk_product_category', 'Product', 'pro_cat_id', 'Category', 'cat_id');
        $this->addForeignKey('fk_product_made', 'Product', 'pro_made_id', 'Made', 'made_id');
        $this->addForeignKey('fk_product_size', 'Product', 'pro_size_id', 'Size', 'size_id');
        $this->addForeignKey('fk_product_supplier', 'Product', 'pro_supplier_id', 'Supplier', 'sup_id');
    }

    public function down()
    {
        $this->dropTable('{{%Product}}');
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
