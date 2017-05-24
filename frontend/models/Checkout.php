<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
/**
 * This is the model class for table "customer".
 *
 * @property int $id
 * @property string $username
 * @property string $full_name
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property int $phone
 * @property string $address
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Order[] $orders
 * @property Wishlist[] $wishlists
 */
class Checkout extends Model
{
    public $customer_id;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $name_ship;
    public $email_ship;
    public $phone_ship;
    public $address_ship;
    public $payment;
    public $deliver;
    public $request;
    public $amount;
    /**
     * @inheritdoc
     */
    // public static function tableName()
    // {
    //     return 'customer';
    // }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            ['name', 'required','message'=>'{attribute} không được để trống'],
            ['name', 'string', 'min' => 8, 'max' => 255],

            [['phone','amount'], 'required','message'=>'{attribute} không được để trống'],
            [['phone','amount'], 'integer'],

            ['address', 'required','message'=>'{attribute} không được để trống'],
            ['address', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'trim'],
            ['email', 'required','message'=>'{attribute} không được để trống'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['name_ship', 'required','message'=>'{attribute} không được để trống'],
            ['name_ship', 'string', 'min' => 8, 'max' => 255],

            [['phone_ship','amount'], 'required','message'=>'{attribute} không được để trống'],
            [['phone_ship','amount'], 'integer'],

            ['address_ship', 'required','message'=>'{attribute} không được để trống'],
            ['address_ship', 'string', 'min' => 2, 'max' => 255],
            
            ['email_ship', 'trim'],
            ['email_ship', 'trim'],
            ['email_ship', 'required','message'=>'{attribute} không được để trống'],
            ['email_ship', 'email'],
            ['email_ship', 'string', 'max' => 255],
            ['email_ship', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
          

            ['request', 'required','message'=>'{attribute} không được để trống'],
            ['request', 'string','max' => 255],

            ['payment', 'required','message'=>'{attribute} không được để trống'],
            ['payment', 'string','max' => 255],
            
            ['deliver', 'required','message'=>'{attribute} không được để trống'],
            ['deliver', 'string','max' => 255],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * @inheritdoc
     */
     public function attributeLabels()
    {
        return [
            'name' => 'Tên người mua',
            'email' => 'Email',
            'phone' => 'Điện thoại',
            'address' => 'Địa chỉ',
            'name_ship' => 'Tên người nhận',
            'email_ship' => 'Email',
            'phone_ship' => 'Điện thoại',
            'address_ship' => 'Địa chỉ',
            'request' => 'Ghi chú',
            'payment' => 'Thanh toán',
            'deliver' => 'Vận chuyển',
            'amount'=>''

        ];
    }
}
