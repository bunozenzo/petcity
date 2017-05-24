<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property int $pay_id
 * @property string $pay_name
 * @property int $status
 * @property int $date_create
 * @property int $date_update
 *
 * @property Order[] $orders
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pay_name', 'date_create', 'date_update'], 'required','message'=>'{attribute} không được để trống'],
            [['status', 'date_create', 'date_update'], 'integer'],
            [['pay_name'], 'string', 'max' => 255],
            [['pay_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pay_id' => 'Pay ID',
            'pay_name' => 'Phương thức thanh toán',
            'status' => 'Trạng thái',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['payment_id' => 'pay_id']);
    }
}
