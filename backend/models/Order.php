<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $order_id
 * @property int $customer_id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $name_ship
 * @property string $email_ship
 * @property string $phone_ship
 * @property string $address_ship
 * @property string $request
 * @property int $payment_id
 * @property int $deliver_id
 * @property string $order_amount
 * @property int $status
 * @property int $date_create
 * @property int $date_update
 *
 * @property Deliver $deliver
 * @property Payment $payment
 * @property OrderDetail[] $orderDetails
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public    $revenue;
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id', 'payment_id', 'deliver_id', 'status', 'date_create', 'date_update', 'order_amount','phone_ship', 'phone'], 'integer'],
            [['payment_id', 'deliver_id', 'date_create', 'date_update'], 'required'],
            [['name', 'name_ship'], 'string', 'max' => 40],
            [['email', 'address', 'email_ship',  'address_ship', 'request'], 'string', 'max' => 255],
            [['deliver_id'], 'exist', 'skipOnError' => true, 'targetClass' => Deliver::className(), 'targetAttribute' => ['deliver_id' => 'del_id']],
            [['payment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Payment::className(), 'targetAttribute' => ['payment_id' => 'pay_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Mã HĐ',
            'customer_id' => 'Mã người dùng',
            'name' => 'Họ tên người đặt',
            'email' => 'Email người đặt',
            'phone' => 'Điện thoại',
            'address' => 'Địa chỉ người đặt',
            'name_ship' => 'Tên người nhận',
            'email_ship' => 'Email người nhận',
            'phone_ship' => 'Điện thoại người nhận',
            'address_ship' => 'Địa chỉ người nhận',
            'request' => 'Thông tin phản hổi',
            'payment_id' => 'Phương thức thanh toán',
            'deliver_id' => 'Phương thức vận chuyển',
            'order_amount' => 'Tổng tiền',
            'status' => 'Trạng thái',
            'date_create' => 'Ngày tạo',
            'date_update' => 'Ngày sửa',
        ];
    }
           public function getreport($month,$year)
    {
     $sql="SELECT * FROM product where pro_id not in (SELECT t.pro_id FROM order_detail t, `order` h where t.order_id=h.order_id AND YEAR(FROM_UNIXTIME(h.date_create))='$year' and MONTH(FROM_UNIXTIME(h.date_create))='$month' )";
    $report=Product::findBysql($sql)->asArray()->all();
    return $report;
    }
     public function getreportRevenue($month,$year)
    {

        if($month!=="")
        {
        $sql="SELECT order_id,order_amount,FROM_UNIXTIME(date_create) as date_create FROM `order` where YEAR(FROM_UNIXTIME(date_create))='$year' and MONTH(FROM_UNIXTIME(date_create))='$month'";
        $revenue=Order::findBysql($sql)->asArray()->all();
        }
        else
        if($month=="")
        {
        $sql="SELECT order_id,order_amount,FROM_UNIXTIME(date_create)  FROM hoadon where YEAR(FROM_UNIXTIME(date_create))='$year'";
        $revenue=Order::findBysql($sql)->asArray()->all();
        }
      return $revenue;
    }
    public function getbanchay($month,$year)
    {
        $sql="SELECT s.pro_id,s.pro_name,s.pro_price, s.pro_sale_off ,SUM(s.pro_id) as soluong from product s, order_detail ct,`order` hd WHERE s.pro_id=ct.pro_id and ct.order_id =hd.order_id and MONTH(FROM_UNIXTIME(hd.date_create))='$month' and YEAR(FROM_UNIXTIME(hd.date_create))='$year' GROUP BY s.pro_id ORDER BY SUM(s.pro_id) DESC LIMIT 0,10";
        $reportbanchay=Order::findBysql($sql)->asArray()->all();
    return $reportbanchay;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeliver()
    {
        return $this->hasOne(Deliver::className(), ['del_id' => 'deliver_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayment()
    {
        return $this->hasOne(Payment::className(), ['pay_id' => 'payment_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetail::className(), ['order_id' => 'order_id']);
    }
}
