<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "size".
 *
 * @property int $size_id
 * @property string $size_name
 * @property int $status
 * @property int $date_create
 * @property int $date_update
 *
 * @property Product $product
 * @property Category[] $pros
 * @property Made[] $pros0
 * @property Supplier[] $pros1
 */
class Size extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'size';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['size_name', 'date_create', 'date_update'], 'required','message'=>'{attribute} không được để trống'],
            [['status', 'date_create', 'date_update'], 'integer'],
            [['size_name'], 'string', 'max' => 255],
            [['size_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'size_id' => 'Size ID',
            'size_name' => 'Tên khích thước',
            'status' => 'Trạng thái',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
        ];
    }
    public function getAllSize(){
        $data= Size::find()->asArray()->where(['status'=>'1'])->all();
        return $data;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['pro_id' => 'size_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPros()
    {
        return $this->hasMany(Category::className(), ['cat_id' => 'pro_id'])->viaTable('product', ['pro_id' => 'size_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPros0()
    {
        return $this->hasMany(Made::className(), ['made_id' => 'pro_id'])->viaTable('product', ['pro_id' => 'size_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPros1()
    {
        return $this->hasMany(Supplier::className(), ['sup_id' => 'pro_id'])->viaTable('product', ['pro_id' => 'size_id']);
    }
}
