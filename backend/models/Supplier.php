<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property int $sup_id
 * @property string $sup_name
 * @property string $mobile
 * @property string $address
 * @property int $status
 * @property int $date_create
 * @property int $date_update
 *
 * @property Product $product
 * @property Category[] $pros
 * @property Made[] $pros0
 * @property Size[] $pros1
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sup_name', 'mobile', 'address', 'date_create', 'date_update'], 'required','message'=>'{attribute} không được để trống'],
            [['status', 'date_create', 'date_update'], 'integer'],
            [['sup_name', 'mobile', 'address'], 'string', 'max' => 255],
            [['sup_name'], 'unique'],
            [['mobile'], 'unique'],
            [['address'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sup_id' => 'Sup ID',
            'sup_name' => 'Tên công ty',
            'mobile' => 'Điện thoại',
            'address' => 'Địa chỉ',
            'status' => 'Trạng thái',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
        ];
    }
    public function getAllSupplier(){
        $data= Supplier::find()->asArray()->where(['status'=>'1'])->all();
        return $data;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['pro_id' => 'sup_id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPros()
    {
        return $this->hasMany(Category::className(), ['cat_id' => 'pro_id'])->viaTable('product', ['pro_id' => 'sup_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPros0()
    {
        return $this->hasMany(Made::className(), ['made_id' => 'pro_id'])->viaTable('product', ['pro_id' => 'sup_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPros1()
    {
        return $this->hasMany(Size::className(), ['size_id' => 'pro_id'])->viaTable('product', ['pro_id' => 'sup_id']);
    }
}
