<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order_detail".
 *
 * @property int $order_detail_id
 * @property int $order_id
 * @property int $pro_id
 * @property string $pro_price
 * @property int $order_detail_qty
 * @property string $pro_amount
 * @property int $status
 *
 * @property Order $order
 * @property Product $pro
 */
class OrderDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'pro_id', 'pro_price', 'order_detail_qty'], 'required'],
            [['order_id', 'pro_id', 'order_detail_qty', 'status','pro_price', 'pro_amount'], 'integer'],
//            [[], 'string', 'max' => 255],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['order_id' => 'order_id']],
            [['pro_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['pro_id' => 'pro_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_detail_id' => 'Mã CTHD',
            'order_id' => 'Hóa đơn',
            'pro_id' => 'Sản phẩm',
            'pro_price' => 'Giá',
            'order_detail_qty' => 'Số lượng',
            'pro_amount' => 'Thành tiền',
            'status' => 'Trạng thái',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['order_id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPro()
    {
        return $this->hasOne(Product::className(), ['pro_id' => 'pro_id']);
    }
}
