<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "deliver".
 *
 * @property int $del_id
 * @property string $del_name
 * @property int $status
 * @property int $date_create
 * @property int $date_update
 *
 * @property Order[] $orders
 */
class Deliver extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deliver';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['del_name', 'date_create', 'date_update'], 'required','message'=>'{attribute} không được để trống'],
            [['status', 'date_create', 'date_update'], 'integer'],
            [['del_name'], 'string', 'max' => 255],
            [['del_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'del_id' => 'Del ID',
            'del_name' => 'Hình thức vận chuyển',
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
        return $this->hasMany(Order::className(), ['deliver_id' => 'del_id']);
    }
}
