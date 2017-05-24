<?php

use yii\db\Migration;

class m170325_201644_tbl_order extends Migration
{
     public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%Order}}', [
            'order_id' => $this->primaryKey(),
            'customer_id' => $this->integer(),
            'name' => $this->string(40),
            'email' => $this->string(),
            'phone' => $this->string(),
            'address' => $this->string(),
            'name_ship' => $this->string(40),
            'email_ship' => $this->string(),
            'phone_ship' => $this->string(),
            'address_ship' => $this->string(),
            'request' => $this->string(),
            'payment_id' => $this->integer()->notNull(),
            'deliver_id' => $this->integer()->notNull(),
            'order_amount' => $this->string()->defaultValue(0),
            'status' => $this->smallInteger()->defaultValue(1),
            'date_create' => $this->integer()->notNull(),
            'date_update' => $this->integer()->notNull(),
        ], $tableOptions);
        $this->addForeignKey('fk_order_payment', 'Order', 'payment_id', 'Payment', 'pay_id');
        $this->addForeignKey('fk_order_deliver', 'Order', 'deliver_id', 'Deliver', 'del_id');
    }

    public function down()
    {
        $this->dropTable('{{%Order}}');
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
