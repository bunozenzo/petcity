<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "made".
 *
 * @property int $made_id
 * @property string $made_name
 * @property int $status
 * @property int $date_create
 * @property int $date_update
 *
 * @property Product $product
 * @property Category[] $pros
 * @property Size[] $pros0
 * @property Supplier[] $pros1
 */
class Made extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'made';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['made_name', 'date_create', 'date_update'], 'required','message'=>'{attribute} không được để trống'],
            [['status', 'date_create', 'date_update'], 'integer'],
            [['made_name'], 'string', 'max' => 255],
            [['made_name'], 'unique','message'=>'{attribute} đã trùng lặp dữ liệu'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'made_id' => 'Made ID',
            'made_name' => 'Tên chất liệu',
            'status' => 'Trạng thái',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
        ];
    }
    public function getAllMade(){
        $data= Made::find()->asArray()->where(['status'=>'1'])->all();
        return $data;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['pro_id' => 'made_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPros()
    {
        return $this->hasMany(Category::className(), ['cat_id' => 'pro_id'])->viaTable('product', ['pro_id' => 'made_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPros0()
    {
        return $this->hasMany(Size::className(), ['size_id' => 'pro_id'])->viaTable('product', ['pro_id' => 'made_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPros1()
    {
        return $this->hasMany(Supplier::className(), ['sup_id' => 'pro_id'])->viaTable('product', ['pro_id' => 'made_id']);
    }
}
