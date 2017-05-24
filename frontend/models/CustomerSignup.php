<?php
namespace frontend\models;

use yii\base\Model;
use common\models\Customer;

/**
 * Signup form
 */
class CustomerSignup extends Model
{
    public $username;
    public $full_name;
    public $email;
    public $phone;
    public $address;
    public $password;
    public $gender;
    public $birth;



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required','message'=>'{attribute} không được để trống'],
            ['username', 'unique', 'targetClass' => '\common\models\Customer', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['full_name', 'required','message'=>'{attribute} không được để trống'],
            ['full_name', 'string', 'min' => 8, 'max' => 255],

            ['email', 'trim'],
            ['email', 'trim'],
            ['email', 'required','message'=>'{attribute} không được để trống'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\Customer', 'message' => 'This email address has already been taken.'],
            ['phone', 'required','message'=>'{attribute} không được để trống'],
            ['phone', 'integer'],

            ['address', 'required','message'=>'{attribute} không được để trống'],
            ['address', 'string', 'min' => 2, 'max' => 255],

            ['gender', 'required','message'=>'{attribute} không được để trống'],
            ['gender', 'string','max' => 255],

            ['birth', 'required','message'=>'{attribute} không được để trống'],
            [['birth'], 'safe'],

            ['password', 'required','message'=>'{attribute} không được để trống'],
            ['password', 'string', 'min' => 6],
        
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }   
        $user = new Customer();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->full_name = $this->full_name;
        $user->phone = $this->phone;
        $user->address = $this->address;
        $user->gender = $this->gender;
        $user->password = $this->password;
        $user->birth = $this->birth;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
     public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'full_name' => 'Họ tên',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'gender' => 'Giới tính',
            'birth' => 'Ngày sinh',
            'email' => 'Email',
            'phone' => 'Điện thoại',
            'address' => 'Địa chỉ',
            'status' => 'Trạng thái',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
