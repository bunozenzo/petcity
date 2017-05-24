<?php

use yii\db\Migration;

class m170325_201738_tbl_order_detail extends Migration
{
   

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%Order_detail}}', [
            'order_detail_id' => $this->primaryKey(),
            'order_id' => $this->integer()->notNull(),
            'pro_id' => $this->integer()->notNull(),
            'pro_price' => $this->string()->notNull(),
            'order_detail_qty'=> $this->integer()->notNull(),
            'pro_amount' => $this->string()->notNull()->defaultValue(0.000),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
        ], $tableOptions);
        $this->addForeignKey('fk_order_detail_order', 'Order_detail', 'order_id', 'Order', 'order_id');
        $this->addForeignKey('fk_order_detail_product', 'Order_detail', 'pro_id', 'Product', 'pro_id');
    }

    public function down()
    {
         $this->dropTable('{{%Order_detail}}');
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
